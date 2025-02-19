<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;


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

Route::group(['prefix' => ''], function () {
    Route::get('/', [HomeController::class, 'homePage'])->name('showHomePage');
    Route::get('/cart', [HomeController::class, 'cart'])->name('showCart');
    Route::post('/update-cart', [HomeController::class, 'updateCart'])->name('updateCart');
    Route::get('/checkout', [HomeController::class, 'checkOut'])->name('checkOut');
    Route::get('product/{id}', [HomeController::class, 'detailProduct'])->name('showDetailProduct');
    Route::get('/products/{category?}/', [HomeController::class, 'product'])->name('showProduct');
    Route::get('/search-suggestions', [HomeController::class, 'searchSuggestions'])->name('searchSuggestions');
    Route::get('/addProductCart/{id}', [HomeController::class, 'addProductCart'])->name('addProductCart');
    Route::post('/addProductCart/{id}', [HomeController::class, 'addProductCart'])->name('addProductCart');
    Route::get('/removeCartItem/{id}', [HomeController::class, 'removeCartItem'])->name('removeCartItem');
    Route::post('/process-checkout', [HomeController::class, 'processCheckout'])->name('processCheckout');

});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'check_login']);
    Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
    Route::post('/register', [AdminController::class, 'check_register']);
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class,
        'customer'=> CustomerController::class,
    ]);
});








