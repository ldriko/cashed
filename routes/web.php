<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);

    Route::get('/orders', fn() => view('order.index'))
        ->name('orders.index');
    Route::get('/orders/checkout', fn() => view('order.checkout'))
        ->name('orders.checkout');
    Route::get('/orders/detail', fn() => view('order.detail'))
        ->name('orders.detail');
    Route::get('/orders/{order}', fn() => view('order.show'))
        ->name('orders.show');
});
