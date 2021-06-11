<?php

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
})->name('welcome');


Route::post('/cart','CartController@index')->name('cart.index');

Route::post('/cart/create','CartController@create')->name('cart.create');

Route::get('catalog','ProductController@index')->name('catalog');
