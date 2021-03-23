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
    Route::get('/charts', [App\Http\Controllers\BackendController::class, 'charts'])->name('charts');

    Route::get('/forget_password', [App\Http\Controllers\BackendController::class, 'forget_password'])->name('forget_password');
    Route::get('/register', [App\Http\Controllers\BackendController::class, 'register'])->name('register');

 });
