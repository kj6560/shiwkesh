<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\frontend\SiteController;
use App\Http\Middleware\Settings;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:web'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/generalSettings', [AdminController::class, 'generalSettings'])->name('generalSettings');
    Route::get('/editGeneralSettings/{id}', [AdminController::class, 'editGeneralSettings'])->name('editGeneralSettings');
    Route::post('/storeGeneralSettings', [AdminController::class, 'storeGeneralSettings'])->name('storeGeneralSettings');
    Route::get('/deleteGeneralSettings/{id}', [AdminController::class, 'deleteGeneralSettings'])->name('deleteGeneralSettings');
});
