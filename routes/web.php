<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('/products/{category?}', [HomeController::class, 'product'])->name('products.index');
Route::get('/product/{id}', [HomeController::class, 'detailProduct'])->name('product.show');
Route::get('/search-suggestions', [HomeController::class, 'searchSuggestions'])->name('search.suggestions');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart', [HomeController::class, 'cart'])->name('cart.index');
    Route::post('/cart/update', [HomeController::class, 'updateCart'])->name('cart.update');
    Route::get('/cart/add/{id}', [HomeController::class, 'addProductCart'])->name('cart.add');
    Route::get('/cart/remove/{id}', [HomeController::class, 'removeCartItem'])->name('cart.remove');
    Route::get('/checkout', [HomeController::class, 'checkOut'])->name('checkout.index');
    Route::post('/checkout', [HomeController::class, 'processCheckout'])->name('checkout.process');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'check_login'])->name('admin.check_login');
    Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
    Route::post('/register', [AdminController::class, 'check_register'])->name('admin.check_register');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Add social login routes
    Route::get('auth/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
    Route::get('auth/facebook', [AuthController::class, 'redirectToFacebook'])->name('login.facebook');
    Route::get('auth/facebook/callback', [AuthController::class, 'handleFacebookCallback']);

    // Add password reset routes
    Route::get('/forgot-password', [AdminController::class, 'forgotPassword'])
        ->name('password.request');
    Route::post('/forgot-password', [AdminController::class, 'sendResetLink'])
        ->name('password.email');
    Route::get('/reset-password/{token}', [AdminController::class, 'resetPassword'])
        ->name('password.reset');
    Route::post('/reset-password', [AdminController::class, 'updatePassword'])
        ->name('password.update');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class,
        'customer'=> CustomerController::class,
    ]);
});
