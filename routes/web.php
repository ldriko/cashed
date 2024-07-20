<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);

    Route::get('/orders', [OrderController::class, 'index'])
        ->name('orders.index');
    Route::get('/orders/create', [OrderController::class, 'create'])
        ->name('orders.create');

    Route::get('/orders/create/detail/{product}', [OrderController::class, 'createDetail'])
        ->name('orders.create.detail');
    Route::post('/orders/create/detail/{product}', [OrderController::class, 'storeDetail'])
        ->name('orders.store.detail');

    Route::post('/orders/checkout', [OrderController::class, 'checkout'])
        ->name('orders.checkout');

    Route::get('/orders/{order}', [OrderController::class, 'show'])
        ->name('orders.show');
});
