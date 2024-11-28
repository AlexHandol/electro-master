<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/shop', [ProductsController::class, 'index'])->name('shop');
Route::get('/shop/hot-deals', [ProductsController::class, 'hotDeals'])->name('shop.hot-deals');
Route::get('/shop/PCs', [ProductsController::class, 'PCs'])->name('shop.PCs');
Route::get('/shop/laptops', [ProductsController::class, 'laptops'])->name('shop.laptops');
Route::get('/shop/smartphones', [ProductsController::class, 'smartPhones'])->name('shop.smartphones');
Route::get('/products/view/{product}', [ProductsController::class, 'show'])->name('products.view.show');