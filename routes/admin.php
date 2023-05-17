<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_process', [AuthController::class, 'login_process'])->name('login_process');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

