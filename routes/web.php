<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','App\Http\Controllers\FrontendController@index');

Route::get('/checkout','App\Http\Controllers\FrontendController@checkout');
Route::get('/my_account','App\Http\Controllers\FrontendController@my_account');
Route::get('/product_detail','App\Http\Controllers\FrontendController@product_detail');
Route::get('/product_list','App\Http\Controllers\FrontendController@product_list');
Route::get('/wishlist','App\Http\Controllers\FrontendController@wishlist');
Route::get('/contact','App\Http\Controllers\FrontendController@contact');
Route::get('/cart','App\Http\Controllers\FrontendController@cart');

Auth::routes();

 Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

    Route::get('/blank', [App\Http\Controllers\BackendController::class, 'blank'])->name('blank');
    Route::get('/buttons', [App\Http\Controllers\BackendController::class, 'buttons'])->name('buttons');
    Route::get('/cards', [App\Http\Controllers\BackendController::class, 'cards'])->name('cards');
    Route::resource('/testimonial','App\Http\Controllers\testimonialController');
     // Route::get('/testimonial', [App\Http\Controllers\testimonialController::class, 'show'])->name('testimonial');
     //Route::get('/testimonial', [App\Http\Controllers\testimonialController::class, 'show']);
    
    Route::get('/forgot_password', [App\Http\Controllers\BackendController::class, 'forgot_password'])->name('forgot_password');
    Route::get('/profile', [App\Http\Controllers\BackendController::class, 'profile'])->name('profile');
    Route::get('/tables', [App\Http\Controllers\BackendController::class, 'tables'])->name('tables');

    Route::get('/utilities_other', [App\Http\Controllers\BackendController::class, 'utilities_other'])->name('utilities_other');
    Route::get('/utilities_border', [App\Http\Controllers\BackendController::class, 'utilities_border'])->name('utilities_border');
    Route::get('/utilities_color', [App\Http\Controllers\BackendController::class, 'utilities_color'])->name('utilities_color');
    Route::get('/utilities_animation', [App\Http\Controllers\BackendController::class, 'utilities_animation'])->name('utilities_animation');
 });
