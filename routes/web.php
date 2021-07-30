<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\PostResource;
use App\Post;

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


// Pagine dei posts

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');

// Contacts routes

// Route::get('contacts','PageController@contacts')->name('contacts');
Route::get('contacts', 'ContactController@form')->name('contacts');
Route::post('contacts', 'ContactController@send')->name('contacts.send');





Auth::routes();

Route::middleware('auth')->namespace('Admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::get('blog', function () {
        return view('admin.blog');
    });
});

Route::get('posts/{post}', function (Post $post) {
    return new PostResource(Post::find($post));
});



