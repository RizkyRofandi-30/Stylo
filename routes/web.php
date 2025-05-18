<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\SettingsController;
use App\Http\Middleware\Authenticated;
use Illuminate\Routing\Controllers\Middleware;

Route::get('/test', function () {
    return view('user.test-page');
});

Route::get('/package', function () {
    return view('admin.package-user');
});


Route::get('/single-product', function () {
    return view('user.single-product');
});

Route::get('/list-product', function () {
    return view('user.list-product');
});

Route::middleware('autentikasi')->group(function () {
    Route::get('/order-history', function () {
        return view('user.order-history');
    });
    Route::get('/cart', function () {
        return view('user.cart');
    });

    Route::get('/settings', [SettingsController::class, 'show']);
    Route::get('/settings/{id}', [SettingsController::class, 'show'])->name('settings');
    Route::post('/settings/{id}', [SettingsController::class, 'update'])->name('settings.update');
});

Route::get('/admin', [ProductController::class, 'showProduct'])->name('admin');
Route::delete('/admin/{id}', [ProductController::class, 'deleteProduct'])->name('admin.delete_product');
Route::post('/admin', [ProductController::class, 'addProduct'] )->name('admin.add_product');
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::post('/', [IndexController::class, 'logout'])->name('index.logout');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::get('/register', [RegisController::class, 'create'])->name('register');
Route::post('/register', [RegisController::class, 'store'])->name('register.store');
