<?php

namespace App\Console\Commands\Models;

use Illuminate\Console\Command;
use Exception;
use ZipArchive;
use App\Models\CronTable;
use App\Services\GoogleDriveService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DatabaseBackup
{
    public function run()
    {
        $this->logToCronTable("Backup process started.");

        set_time_limit(3600);
        ini_set('memory_limit', '512M');

        try {
            $driveResponse = $this->backupAndUploadDatabases();

            // Extract file details
            if ($driveResponse instanceof \Google_Service_Drive_DriveFile) {
                $fileId = $driveResponse->getId();
                $fileName = $driveResponse->getName();
                $this->logToCronTable("Backup completed successfully. File ID: $fileId, Name: $fileName");
            } else {
                $this->logToCronTable("Backup completed successfully: " . json_encode($driveResponse));
            }

            return [
                "statusCode" => 200,
                "errors" => [],
                "message" => "Backup created successfully",
            ];
        } catch (Exception $e) {
            $this->logToCronTable("Backup failed: " . $e->getMessage());
            return [
                "statusCode" => 500,
                "errors" => [$e->getMessage()],
            ];
        }
    }

    private function getDatabases()
    {
        $commonConfig = [
            'host' => env('DB_HOST', '114.69.243.148'),
            'port' => env('DB_PORT', '47849'),
            'user' => env('DB_USERNAME', 'keshav_sr'),
            'pass' => env('DB_PASSWORD', 'Xr$7@Lp^e92#TfKz!qWd'),
        ];

        $dbNames = [
            'keshav_sh',
            'keshav_sp',
        ];

        return array_map(fn($dbName) => array_merge(['name' => $dbName], $commonConfig), $dbNames);
    }


    private function backupAndUploadDatabases()
    {
        $databases = $this->getDatabases();
        $backupDir = storage_path('backups');

        if (!file_exists($backupDir)) {
            mkdir($backupDir, 0755, true);
        }

        $backupFiles = [];
        foreach ($databases as $db) {
            $fileName = "{$db['name']}_backup_" . date('Y-m-d_H-i-s') . ".sql";
            $filePath = "$backupDir/$fileName";

            if ($this->backupDatabase($db, $filePath)) {
                $backupFiles[] = $filePath;
            } else {
                throw new Exception("Failed to back up database: {$db['name']}");
            }
        }

        $this->logToCronTable("Backup files found: " . implode(", ", $backupFiles));

        if (empty($backupFiles)) {
            throw new Exception("No SQL files found to zip.");
        }

        $zipFile = $this->createZip($backupFiles, $backupDir);

        if (!file_exists($zipFile)) {
            throw new Exception("ZIP file not found after creation: $zipFile");
        }

        $this->logToCronTable("Database ZIP created successfully: " . basename($zipFile));

        $driveResponse = $this->uploadToGoogleDrive($zipFile);

        // **Delete the ZIP file from local storage after successful upload**
        if (file_exists($zipFile)) {
            unlink($zipFile);
            $this->logToCronTable("Local ZIP file deleted after successful upload: " . basename($zipFile));
        }

        foreach ($backupFiles as $file) {
            if (file_exists($file)) {
                unlink($file);
            }
        }

        $this->deleteOldGoogleDriveBackups();
        $this->logToCronTable("Backup uploaded and old backups deleted.");

        return $driveResponse;
    }

    private function backupDatabase($db, $filePath)
    {
        $command = sprintf(
            'mysqldump -h%s -P%s -u%s -p%s %s > %s',
            escapeshellarg($db['host']),
            escapeshellarg($db['port']),
            escapeshellarg($db['user']),
            escapeshellarg($db['pass']),
            escapeshellarg($db['name']),
            escapeshellarg($filePath)
        );

        print_r($command);
        exec($command, $output, $resultCode);

        // Log detailed output
        $this->logToCronTable("Backup command output: " . implode("\n", $output));

        if ($resultCode !== 0) {
            $this->logToCronTable("Backup failed for {$db['name']}: " . implode("\n", $output));
            return false;
        }

        if (!file_exists($filePath) || filesize($filePath) == 0) {
            throw new Exception("Backup file not created: $filePath");
        }

        return true;
    }

    private function createZip($files, $backupDir)
    {
        $zipFile = "$backupDir/database_backup_" . date('Y-m-d_H-i-s') . ".zip";
        $zip = new ZipArchive();

        if ($zip->open($zipFile, ZipArchive::CREATE) !== true) {
            throw new Exception("Failed to create ZIP archive: $zipFile");
        }

        foreach ($files as $file) {
            if (!file_exists($file)) {
                $this->logToCronTable("Skipping missing file: $file");
                continue;
            }
            $zip->addFile($file, basename($file));
        }

        $zip->close();

        if (!file_exists($zipFile)) {
            throw new Exception("ZIP file was not created: $zipFile");
        }

        return $zipFile;
    }

    private function uploadToGoogleDrive($zipFile)
    {
        if (!file_exists($zipFile)) {
            throw new Exception("ZIP file does not exist at path: $zipFile");
        }

        try {
            $driveService = new GoogleDriveService();
            $response = $driveService->uploadFile($zipFile);

            if (!$response) {
                throw new Exception("Failed to upload ZIP file to Google Drive.");
            }

            return $response;
        } catch (Exception $e) {
            $this->logToCronTable("Error uploading ZIP: " . $e->getMessage());
            throw $e;
        }
    }

    private function deleteOldGoogleDriveBackups()
    {
        try {
            $client = app(GoogleDriveService::class)->getGoogleClient();
            $service = new \Google_Service_Drive($client);

            $query = "name contains '_backup_' and mimeType='application/zip' and trashed=false";
            $files = $service->files->listFiles([
                'q' => $query,
                'orderBy' => 'createdTime desc',
                'fields' => 'files(id, name, createdTime)',
            ])->getFiles();

            $backupLimit = 5;
            $totalFiles = count($files);

            if ($totalFiles > $backupLimit) {
                $filesToDelete = array_slice($files, $backupLimit);

                foreach ($filesToDelete as $file) {
                    try {
                        $service->files->delete($file->getId());
                        $this->logToCronTable("Deleted old backup: " . $file->getName());
                    } catch (Exception $deleteException) {
                        $this->logToCronTable("Failed to delete backup: " . $file->getName() . " - " . $deleteException->getMessage());
                    }
                }
            }
        } catch (Exception $e) {
            $this->logToCronTable("Failed to delete old backups: " . $e->getMessage());
        }
    }

    private function logToCronTable($exMsg)
    {
        if (is_array($exMsg)) {
            $exMsg = json_encode($exMsg); // Convert array to JSON string
        }

        $crTable = new CronTable();
        $crTable->cron_time = date('Y-m-d H:i:s');
        $crTable->msg = $exMsg;
        $crTable->save();
    }
}
