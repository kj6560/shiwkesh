<?php

namespace App\Services;

use Exception;
use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;
class GoogleDriveService
{
    private $client;

    public function __construct()
    {
        try {
            $this->client = new Google_Client();
            $this->client->setAuthConfig(storage_path("db_backup/credentials_new.json"));
            $this->client->addScope(Google_Service_Drive::DRIVE);
            $this->client->setAccessType('offline');
            $this->client->setPrompt('consent');

            // Load the access token from the custom file
            $tokenPath = storage_path("db_backup/dbbackup.txt");
            if (file_exists($tokenPath)) {
                $accessToken = json_decode(file_get_contents($tokenPath), true);
                $this->client->setAccessToken($accessToken);

                // Check if the access token is expired and refresh if necessary
                if ($this->client->isAccessTokenExpired()) {
                    $refreshToken = $accessToken['refresh_token'] ?? null;

                    if ($refreshToken) {
                        $this->client->refreshToken($refreshToken);

                        // Save the updated token back to the custom file
                        $newAccessToken = $this->client->getAccessToken();
                        $newAccessToken['refresh_token'] = $refreshToken;
                        file_put_contents($tokenPath, json_encode($newAccessToken));
                    } else {
                        throw new \Exception("Refresh token not available. Re-authentication required.");
                    }
                }
            } else {
                throw new \Exception("Token file not found. Authorization required.");
            }
        } catch (Exception $e) {
            echo "Exception: " . $e->getMessage() . "\n";
            echo "File: " . $e->getFile() . "\n";
            echo "Line: " . $e->getLine() . "\n";
        }
    }

    public function getGoogleClient()
    {
        return $this->client;
    }

    public function getDriveService()
    {
        return new Google_Service_Drive($this->client);
    }

    public function uploadFile($filePath)
    {
        try {
            $service = new Google_Service_Drive($this->client);
            $file = new Google_Service_Drive_DriveFile();
            $file->setName(basename($filePath));
            $file->setParents(["12lPOpb5niCsivhnjwNnBTMGX2H3QpmAi"]); // Change folder ID

            $content = file_get_contents($filePath);
            $mimeType = mime_content_type($filePath);

            $response = $service->files->create($file, [
                'data' => $content,
                'mimeType' => $mimeType,
                'uploadType' => 'multipart',
            ]);

            return $response;
        } catch (Exception $e) {
            throw new Exception("Google Drive upload failed: " . $e->getMessage());
        }
    }
}
