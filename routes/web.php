<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\SettingsController;
use App\Http\Middleware\Authenticated;
use App\Models\Product;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Routing\Controllers\Middleware;

Route::get('/test', function () {
    return view('user.test-page');
});

Route::get('/package', function () {
    return view('admin.package-user');
});


Route::get('/checkout', function(){
    return view('user.checkout');
});

Route::get('/vardump',function (){
    //
});

Route::get('/clear-checkout', function () {
    session()->forget('checkout_array');
    return redirect()->back();
});

Route::middleware('autentikasi')->group(function () {
    Route::get('/order-history', function () {
        return view('user.order-history');
    });
    Route::get('/cart', function () {
        return view('user.cart');
    });

    Route::get('/cart/{user_id}', [UserProductController::class, 'showCart'])->name('user.show_cart');
    Route::post('/cart/{user_id}', [UserProductController::class, 'addToCart'])->name('user.add_to_cart');
    Route::delete('/cart/{user_id}/{product_id}',[UserProductController::class,'deleteItemCart'])->name('user.delete_item_cart');

    Route::get('/checkout', function(){
        return view('user.checkout');
    });

    Route::post('/checkout/{user_id}',[UserProductController::class, 'postCheckout'])->name('user.post_checkout');
    Route::get('/checkout/{user_id}',[UserProductController::class, 'getCheckout'])->name('user.get_checkout');

    Route::post('/checkoutCart/{user_id}/{cart_id}',[UserProductController::class, 'postCheckoutCart'])->name('user.post_checkout_cart');
    Route::get('/checkoutCart/{user_id}/{cart_id}',[UserProductController::class, 'getCheckoutCart'])->name('user.get_checkout_cart');

    Route::get('/settings', [SettingsController::class, 'show']);
    Route::get('/settings/{id}', [SettingsController::class, 'show'])->name('settings');
    Route::post('/settings/{id}', [SettingsController::class, 'update'])->name('settings.update');
});

Route::get('/list-product', [UserProductController::class, 'listProduct']);
Route::get('/list-product/{category}', [UserProductController::class, 'listProductByCategory'])->name('listProductByCategory');
Route::get('/edit/{id}', [AdminProductController::class, 'getEditProduct'])->name('admin.get_edit_product');
Route::post('/edit/{id}', [AdminProductController::class, 'editProduct'])->name('admin.post_edit_product');
Route::get('/single-product/{id}', [UserProductController::class, 'singleProduct'])->name('user.single_product');
Route::get('/admin', [AdminProductController::class, 'showProduct'])->name('admin');
Route::delete('/admin/{id}', [AdminProductController::class, 'deleteProduct'])->name('admin.delete_product');
Route::post('/admin', [AdminProductController::class, 'addProduct'] )->name('admin.add_product');
Route::get('/', [IndexController::class, 'index' ])->name('index');
Route::post('/', [IndexController::class, 'logout'])->name('index.logout');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::get('/register', [RegisController::class, 'create'])->name('register');
Route::post('/register', [RegisController::class, 'store'])->name('register.store');
