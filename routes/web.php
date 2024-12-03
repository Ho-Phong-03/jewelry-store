<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
    Route::get('/home.cart', [HomeController::class, 'cart'])->name('showCart');
    Route::get('/home.checkout', [HomeController::class, 'checkOut'])->name('checkOut');
    Route::get('/home.detail-Product', [HomeController::class, 'detailProDuct'])->name('showDetailProduct');
    Route::get('/home.product', [HomeController::class, 'product'])->name('showProduct');

});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class,
    ]);
});





