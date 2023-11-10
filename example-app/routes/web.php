<?php

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
    return view('welcome');
});

Route::get('/product', 'App\Http\Controllers\ProductController@index');

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
