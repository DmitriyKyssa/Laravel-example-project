<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

// Routes for products (CRUD)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');


// Routes for test page
Route::get('/test', 'App\Http\Controllers\TestPageController@index')->name('test.index');
Route::get('/test/create', "App\Http\Controllers\TestPageController@create");
Route::get('/test/update', "App\Http\Controllers\TestPageController@update");
Route::get('/test/delete', "App\Http\Controllers\TestPageController@delete");
Route::get('/test/first-or-create', "App\Http\Controllers\TestPageController@firstOrCreate");
Route::get('/test/update-or-create', "App\Http\Controllers\TestPageController@updateOrCreate");


Route::get("/example-page", 'App\Http\Controllers\ExamplePageController@examplePage');

Route::get('/contact', 'App\Http\Controllers\ContactPageController@contactPage')->name('contact.index');

Route::get('/about', 'App\Http\Controllers\AboutPageController@index')->name('about.index');

Route::get('/home', 'App\Http\Controllers\HomePageController@index')->name('home.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
