<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
});

Route::get('/test', function () {
    return view('user.test-page');
});

Route::get('/order-history', function () {
    return view('user.order-history');
});

Route::get('/cart', function () {
    return view('user.cart');
});

Route::get('/single-product', function () {
    return view('user.single-product');
});

Route::get('/list-product', function () {
    return view('user.list-product');
});

Route::get('/settings', function () {
    return view('user.settings');
});
