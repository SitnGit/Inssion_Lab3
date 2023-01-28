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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts/create', 'App\Http\Controllers\CreatePostController@create');
Route::get('/posts/create2', 'App\Http\Controllers\CreatePostController@createGallery');
Route::post('/posts/store', 'App\Http\Controllers\CreatePostController@store');
Route::post('/posts/storeGallery', 'App\Http\Controllers\CreatePostController@storeGallery');

Route::get('/posts/all', 'App\Http\Controllers\PostController@showall');
Route::get('/posts/{post}', 'App\Http\Controllers\PostController@show');

