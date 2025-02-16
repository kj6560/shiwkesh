<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\PortfolioSettingsController;
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
Route::post('/storeQueries',[SiteController::class,'storeQueries'])->name('storeQueries');

Route::middleware(['auth:web'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/generalSettings', [AdminController::class, 'generalSettings'])->name('generalSettings');
    Route::get('/editGeneralSettings/{id}', [AdminController::class, 'editGeneralSettings'])->name('editGeneralSettings');
    Route::post('/storeGeneralSettings', [AdminController::class, 'storeGeneralSettings'])->name('storeGeneralSettings');
    Route::get('/deleteGeneralSettings/{id}', [AdminController::class, 'deleteGeneralSettings'])->name('deleteGeneralSettings');

    Route::get('/enquiries', [AdminController::class, 'enquiries'])->name('enquiries');
    Route::get('/viewEnquiry/{id}',[AdminController::class,'viewEnquiry'])->name('viewEnquiry');
    Route::get('/deleteEnquiry/{id}', [AdminController::class, 'deleteEnquiry'])->name('deleteEnquiry');
    
    //blog settings
    Route::get('/blogSettings', [BlogController::class, 'index'])->name('blogSettings');
    Route::get('/blogSettings/blogs/create', [BlogController::class, 'createBlog'])->name('admin.blogSettings.createBlog');
    Route::get('/blogSettings/blogs/edit/{id}', [BlogController::class, 'editBlog'])->name('admin.blogSettings.editBlog');
    Route::get('/blogSettings/blogs/delete/{id}', [BlogController::class, 'deleteBlog'])->name('admin.blogSettings.deleteBlog');
    Route::post('/blogSettings/blogs/store', [BlogController::class, 'storeBlogPost'])->name('admin.blogSettings.storeBlogPost');

    //blog categories
    Route::get('/blogSettings/categories', [BlogController::class, 'listCategories'])->name('admin.blogSettings.blogCategories');
    Route::get('/blogSettings/categories/create', [BlogController::class, 'createCategory'])->name('admin.blogSettings.createCategory');
    Route::get('/blogSettings/categories/edit/{id}', [BlogController::class, 'editCategory'])->name('admin.blogSettings.editCategory');
    Route::get('/blogSettings/categories/delete/{id}', [BlogController::class, 'deleteCategory'])->name('admin.blogSettings.deleteCategory');
    Route::post('/blogSettings/categories/store', [BlogController::class, 'storeCategory'])->name('admin.blogSettings.storeCategory');

    //blog tags
    Route::get('/blogSettings/tags', [BlogController::class, 'listTags'])->name('admin.blogSettings.blogTags');
    Route::get('/blogSettings/tags/create', [BlogController::class, 'createTag'])->name('admin.blogSettings.createTag');
    Route::get('/blogSettings/tags/edit/{id}', [BlogController::class, 'editTag'])->name('admin.blogSettings.editTag');
    Route::get('/blogSettings/tags/delete/{id}', [BlogController::class, 'deleteTag'])->name('admin.blogSettings.deleteTag');
    Route::post('/blogSettings/tags/store', [BlogController::class, 'storeTag'])->name('admin.blogSettings.storeTag');

    //portfolio settings
    Route::get('/portfolioSettings', [PortfolioSettingsController::class, 'index'])->name('portfolioSettings');
    Route::get('/portfolioSettings/create', [PortfolioSettingsController::class, 'create'])->name('portfolioSettings.create');
});
