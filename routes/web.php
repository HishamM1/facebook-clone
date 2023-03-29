<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
    Route::get('/register', [AuthController::class,'registerForm'])->name('register.form');
    Route::post('/register', [AuthController::class,'register'])->name('register');
}); 

Route::post('/logout', [AuthController::class,'logout'])->middleware('auth')->name('logout');

// User routes
Route::middleware(['auth'])->group(function (){
    Route::resource('user', UserController::class)->only(['show','edit','update','destroy']);
});