<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create']);
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

    Route::get('/products', function () {
        return view('product.index');
    });

    Route::get('/products/create', function () {
        return view('product.create');
    });

    Route::get('/products/edit', function () {
        return view('product.edit');
    });

    Route::get('/users', function () {
        return view('user.index');
    });

    Route::get('/users/create', function () {
        return view('user.create');
    });

    Route::get('/users/edit', function () {
        return view('user.edit');
    });
});
