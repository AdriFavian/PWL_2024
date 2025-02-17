<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
}); 

Route::get('/about', function () {
    return 'Nama : Mohammad Adri Favian <br> NIM : 2341720185';
});

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($postid) {
    return 'Halaman Artikel dengan ID '.$postid;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/index', function ($name='John') {
    return 'Nama saya '.$name;
});

// PageController
Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);

// Modifikasi route
Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

//PhotoController
Route::resource('photos', PhotoController::class);