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

Route::resource('productos', 'ProductController');

Route::resource('barra', 'BarController');

Route::resource('linea', 'LineController');

Route::post('/productos/all', 'ProductController@all');

// Route::get('product', [ProductController::class, 'all'])->name('product.all');