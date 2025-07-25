<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\PortfolioSettingsController;
use App\Http\Controllers\frontend\SiteController;
use App\Http\Middleware\Settings;
use Google\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/authorize', function () {
    $client = new Client();
    $client->setAuthConfig(storage_path("app/public/db_backup/credentials_new.json"));
    $client->addScope('https://www.googleapis.com/auth/drive.file');
    $client->setRedirectUri( 'https://shiwkesh.in/callback');

    return redirect($client->createAuthUrl());
});
Route::get('/google-drive/auth', [SiteController::class, 'authenticate']);
Route::get('/callback', function (Request $request) {
    $client = new Client();
    $client->setAuthConfig(storage_path("db_backup/credentials_new.json"));
    //$client->setRedirectUri(config('app.url') . '/callback');

    $token = $client->fetchAccessTokenWithAuthCode($request->get('code'));
    $refreshToken = $token['access_token'];
    $envPath = storage_path("db_backup/dbbackup.txt");

    if (file_exists($envPath)) {
        // dd($token);
        // // Replace or add the refresh token to the .env file
        // $envContent = file_get_contents($envPath);
        // $pattern = '/^GOOGLE_DRIVE_REFRESH_TOKEN=.*$/m'; // Pattern to match existing token
        // $newLine = "GOOGLE_DRIVE_REFRESH_TOKEN=$refreshToken";

        // if (preg_match($pattern, $envContent)) {
        //     // Update existing line
        //     $envContent = preg_replace($pattern, $newLine, $envContent);
        // } else {
        //     // Add new line
        //     $envContent .= PHP_EOL . $newLine;
        // }

        file_put_contents($envPath, json_encode($token));
    } // Save the refresh_token from here to your .env file
    print_r(json_decode(file_get_contents($envPath), true));
});
Route::get('/privacy', [SiteController::class, 'privacy'])->middleware([Settings::class])->name('privacy');
Route::get('/terms', [SiteController::class, 'terms'])->middleware([Settings::class])->name('terms');

Route::get('/paymentRefundsPolicy', [SiteController::class, 'paymentAndRefund'])->middleware([Settings::class])->name('paymentRefundsPolicy');
Route::get('/webdesign',[SiteController::class,'webdesign'])->middleware([Settings::class])->name('webdesign');
Route::get('/mobileApplications',[SiteController::class,'mobileApplications'])->middleware([Settings::class])->name('mobileApplications');
Route::get('/productManagement',[SiteController::class,'productManagement'])->middleware([Settings::class])->name('productManagement');
Route::get('/marketing',[SiteController::class,'marketing'])->middleware([Settings::class])->name('marketing');
Route::get('/graphicDesign',[SiteController::class,'graphicDesign'])->middleware([Settings::class])->name('graphicDesign');
Route::get('/', [SiteController::class, 'index'])->middleware([Settings::class])->name('home');
Route::get('/contactUs', [SiteController::class, 'contactUs'])->middleware([Settings::class])->name('contactUs');
Route::get('/about', [SiteController::class, 'about'])->middleware([Settings::class])->name('about');
Route::get('/blog', [SiteController::class, 'blog'])->middleware([Settings::class])->name('blog');
Route::get('/blogDetails', [SiteController::class, 'blogDetails'])->middleware([Settings::class])->name('blogDetails');
Route::get('/services', [SiteController::class, 'services'])->middleware([Settings::class])->name('services');
Route::get('/portfolio', [SiteController::class, 'portfolio'])->middleware([Settings::class])->name('portfolio');
Route::get('/portfolioDetails', [SiteController::class, 'portfolioDetails'])->middleware([Settings::class])->name('portfolioDetails');
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
Route::get('/register', [AdminController::class, 'register'])->name('register');
Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
Route::post('/storeUser', [AdminController::class, 'storeUser'])->name('storeUser');
Route::post('/storeQueries', [SiteController::class, 'storeQueries'])->name('storeQueries');
Route::get("/downloads", [SiteController::class, 'downloads'])->name('downloads');
Route::get("/downloadFile", [SiteController::class, 'downloadFile'])->name('downloadFile');

Route::middleware(['auth:web'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/generalSettings', [AdminController::class, 'generalSettings'])->name('generalSettings');
    Route::get('/editGeneralSettings/{id}', [AdminController::class, 'editGeneralSettings'])->name('editGeneralSettings');
    Route::post('/storeGeneralSettings', [AdminController::class, 'storeGeneralSettings'])->name('storeGeneralSettings');
    Route::get('/deleteGeneralSettings/{id}', [AdminController::class, 'deleteGeneralSettings'])->name('deleteGeneralSettings');

    Route::get('/enquiries', [AdminController::class, 'enquiries'])->name('enquiries');
    Route::get('/viewEnquiry/{id}', [AdminController::class, 'viewEnquiry'])->name('viewEnquiry');
    Route::get('/deleteEnquiry/{id}', [AdminController::class, 'deleteEnquiry'])->name('deleteEnquiry');

    //blog settings
    Route::get('/blogSettings', [BlogController::class, 'index'])->name('blogSettings');
    Route::get('/blogSettings/blogs/create', [BlogController::class, 'createBlog'])->name('blogSettings.createBlog');
    Route::get('/blogSettings/blogs/edit/{id}', [BlogController::class, 'editBlog'])->name(' blogSettings.editBlog');
    Route::get('/blogSettings/blogs/delete/{id}', [BlogController::class, 'deleteBlog'])->name(' blogSettings.deleteBlog');
    Route::post('/blogSettings/blogs/store', [BlogController::class, 'storeBlogPost'])->name(' blogSettings.storeBlogPost');

    //blog categories
    Route::get('/blogSettings/categories', [BlogController::class, 'listCategories'])->name(' blogSettings.blogCategories');
    Route::get('/blogSettings/categories/create', [BlogController::class, 'createCategory'])->name(' blogSettings.createCategory');
    Route::get('/blogSettings/categories/edit/{id}', [BlogController::class, 'editCategory'])->name(' blogSettings.editCategory');
    Route::get('/blogSettings/categories/delete/{id}', [BlogController::class, 'deleteCategory'])->name(' blogSettings.deleteCategory');
    Route::post('/blogSettings/categories/store', [BlogController::class, 'storeCategory'])->name(' blogSettings.storeCategory');

    //blog tags
    Route::get('/blogSettings/tags', [BlogController::class, 'listTags'])->name(' blogSettings.blogTags');
    Route::get('/blogSettings/tags/create', [BlogController::class, 'createTag'])->name(' blogSettings.createTag');
    Route::get('/blogSettings/tags/edit/{id}', [BlogController::class, 'editTag'])->name(' blogSettings.editTag');
    Route::get('/blogSettings/tags/delete/{id}', [BlogController::class, 'deleteTag'])->name(' blogSettings.deleteTag');
    Route::post('/blogSettings/tags/store', [BlogController::class, 'storeTag'])->name(' blogSettings.storeTag');

    //portfolio settings
    Route::get('/portfolioSettings', [PortfolioSettingsController::class, 'index'])->name('portfolioSettings');
    Route::get('/portfolioSettings/create', [PortfolioSettingsController::class, 'create'])->name('portfolioSettings.create');
    Route::post('/portfolioSettings/store', [PortfolioSettingsController::class, 'store'])->name('portfolioSettings.store');
    Route::get('/portfolioSettings/edit/{id}', [PortfolioSettingsController::class, 'edit'])->name('portfolioSettings.edit');
    Route::get('/portfolioSettings/delete/{id}', [PortfolioSettingsController::class, 'delete'])->name('portfolioSettings.delete');
});
