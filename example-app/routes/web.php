<?php

use App\Http\Controllers\Admin\Product\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Routes for products (CRUD)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Route for admin
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function (){
    Route::group(['namespace' => 'Post'], function (){
        Route::get('/product', [AdminController::class, 'index'])->name('admin.product.index');
        Route::get('/product/create', [AdminController::class, 'create'])->name('admin.product.create');
        Route::post('/product', [AdminController::class, 'store'])->name('admin.product.store');
        Route::get('/product/{product}', [AdminController::class, 'show'])->name('admin.product.show');
        Route::get('/product/{product}/edit', [AdminController::class, 'edit'])->name('admin.product.edit');
        Route::patch('/product/{product}', [AdminController::class, 'update'])->name('admin.product.update');
        Route::delete('/product/{product}', [AdminController::class, 'destroy'])->name('admin.product.destroy');
    });
});

// Route for shop
Route::group(['namespace' => 'Shop', 'prefix' => 'admin'], function (){
    Route::group(['namespace' => 'Post'], function (){
        Route::get('/shop', [ShopController::class, 'index'])->name('admin.shop.index');
        Route::get('/shop/create', [ShopController::class, 'create'])->name('admin.shop.create');
        Route::post('/shop', [ShopController::class, 'store'])->name('admin.shop.store');
        Route::get('/shop/{shop}', [ShopController::class, 'show'])->name('admin.shop.show');
        Route::get('/shop/{shop}/edit', [ShopController::class, 'edit'])->name('admin.shop.edit');
        Route::patch('/shop/{shop}', [ShopController::class, 'update'])->name('admin.shop.update');
        Route::delete('/shop/{shop}', [ShopController::class, 'destroy'])->name('admin.shop.destroy');
    });
});

// Excel export
use App\Http\Controllers\ExportController;

Route::get('/export', [ExportController::class, 'export']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
