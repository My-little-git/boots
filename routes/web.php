<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/catalog', [ProductController::class, 'index'])->name('catalog');
Route::get('/card/{id}', [ProductController::class, 'show'])->name('card');
Route::view('/about', 'about')->name('about');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login_process', [AuthController::class, 'login_process'])->name('login_process');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register_process', [AuthController::class, 'register_process'])->name('register_process');
});

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/cart/{id}', [CartController::class, 'store'])->name('cart-store');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
