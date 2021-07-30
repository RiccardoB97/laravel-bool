<?php

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Rotta senza controller
// Route::get('posts', function(){
//     $posts = Post::all();
//     return response()->json([
//         'status_code' => 200,
//         'total_results' => count($posts),
//         'response' => $posts
//     ]);
// });


// Rotta non customizzabile
// Route::get('posts', function(){
//     $posts = Post::paginate();
//     return $posts;
// });

// Tutti i posts comprese relazioni
// Route::get('posts', function () {
//     $posts = Post::with(['tags'])->paginate();
//     return $posts;
// });


// Route con controller
Route::get('posts', 'API\PostController@index');