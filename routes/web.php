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

// Pagine non connesse ad un modello

Route::get('/','PageController@index');
Route::get('about','PageController@about')->name('guests.about');
Route::get('contacts','PageController@contacts')->name('guests.contacts');

// Pagine dei posts

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');





Auth::routes();

Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('posts', PostController::class);
});


