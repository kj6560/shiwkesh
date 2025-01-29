<?php

use App\Http\Controllers\frontend\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[SiteController::class,'index'])->name('home');
Route::get('/contactUs',[SiteController::class,'contactUs'])->name('contactUs');
Route::get('/about',[SiteController::class,'about'])->name('about');
Route::get('/blog',[SiteController::class,'blog'])->name('blog');
Route::get('/blogDetails',[SiteController::class,'blogDetails'])->name('blogDetails');
Route::get('/services',[SiteController::class,'services'])->name('services');
Route::get('/portfolio',[SiteController::class,'portfolio'])->name('portfolio');