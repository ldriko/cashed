<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/categories', function () {
    return view('category.index');
});

Route::get('/categories/create', function () {
    return view('category.create');
});

Route::get('/categories/edit', function () {
    return view('category.edit');
});

Route::get('/products', function () {
    return view('product.index');
});

Route::get('/products/create', function () {
    return view('product.create');
});

Route::get('/products/edit', function () {
    return view('product.edit');
});

Route::get('/login', function () {
    return view('login');
});
