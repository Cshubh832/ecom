<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/','App\Http\Controllers\FrontendController@index');

Route::get('/checkout','App\Http\Controllers\FrontendController@checkout');
Route::get('/my_account','App\Http\Controllers\FrontendController@my_account');
Route::get('/product_detail','App\Http\Controllers\FrontendController@product_detail');
Route::get('/product_list','App\Http\Controllers\FrontendController@product_list');
Route::get('/wishlist','App\Http\Controllers\FrontendController@wishlist');
Route::get('/contact','App\Http\Controllers\FrontendController@contact');
Route::get('/cart','App\Http\Controllers\FrontendController@cart');
Route::get('/login','App\Http\Controllers\FrontendController@login');

// Admin ////////////////////////////////////////////////////////////////////////
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin','verified']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    // Route::get('profile', 'DashboardController@showProfile')->name('profile');
    // Route::put('profile', 'DashboardController@updateProfile')->name('profile.update');
    // Route::put('profile/password', 'DashboardController@changePassword')->name('profile.password');
    // Route::resource('user', 'UserController')->except(['create', 'show', 'edit', 'store']);
    // Route::resource('category', 'CategoryController')->except(['create', 'show', 'edit']);
    // Route::resource('post', 'PostController');
    // Route::get('/comments', 'CommentController@index')->name('comment.index');
    // Route::delete('/comment/{id}', 'CommentController@destroy')->name('comment.destroy');
    // Route::get('/reply-comments', 'CommentReplyController@index')->name('reply-comment.index');
    // Route::delete('/reply-comment/{id}', 'CommentReplyController@destroy')->name('reply-comment.destroy');
    // Route::get('/post-liked-users/{post}', 'PostController@likedUsers')->name('post.like.users');
});

