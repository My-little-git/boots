<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\Product\CreateController;
use App\Http\Controllers\Admin\Product\DestroyController;
use App\Http\Controllers\Admin\Product\EditController;
use App\Http\Controllers\Admin\Product\IndexController;
use App\Http\Controllers\Admin\Product\ShowController;
use App\Http\Controllers\Admin\Product\StoreController;
use App\Http\Controllers\Admin\Product\UpdateController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function(){

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_process', [AuthController::class, 'login_process'])->name('login_process');

});




Route::middleware('admin')->group(function () {

    Route::get('/products', IndexController::class)->name('product.index');
    Route::get('/products/create', CreateController::class)->name('product.create');
    Route::post('/products', StoreController::class)->name('product.store');
    Route::get('/products/{product}', ShowController::class)->name('product.show');
    Route::get('/products/{product}/edit', EditController::class)->name('product.edit');
    Route::patch('/products/{product}', UpdateController::class)->name('product.update');
    Route::delete('/products/{product}', DestroyController::class)->name('product.destroy');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});


