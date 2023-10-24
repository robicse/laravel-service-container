<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

// https://www.youtube.com/watch?v=TQGq6k8HQk4 // reference link
// http://127.0.0.1:8000/posts/1
// http://127.0.0.1:8000/posts/1?gateway=stripe
Route::get('/posts/{post}', [PostController::class, 'show']);
