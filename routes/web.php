<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
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

// Home route
Route::get('/', [HomeController::class,'index'])->name('home')->middleware('auth');

// Auth routes
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class,'loginForm'])->name('login.form');
    Route::post('/login', [AuthController::class,'login'])->name('login');
    Route::post('/register', [AuthController::class,'register'])->name('register');
});

Route::post('/logout', [AuthController::class,'logout'])->middleware('auth')->name('logout');

// User routes
Route::resource('user', UserController::class)->only(['show','edit','update','destroy'])->middleware(['auth']);


// Post routes
Route::resource('post', PostController::class)->middleware('auth');

// Comment routes
Route::resource('comment', CommentController::class)->middleware('auth');

// Like routes
Route::resource('like', LikeController::class)->only(['store'])->middleware('auth');
