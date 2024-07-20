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

    Route::get('/orders/create', fn() => view('order.create'))
        ->name('orders.create');
    Route::get('/orders/create/detail', fn() => view('order.create-detail'))
        ->name('orders.crearte.detail');
    Route::get('/orders/checkout', fn() => view('order.checkout'))
        ->name('orders.checkout');

    Route::get('/orders/{order}', fn() => view('order.show'))
        ->name('orders.show');
});
