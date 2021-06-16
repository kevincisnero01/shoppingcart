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


/*----- PRODUCTS -----*/

Route::get('products','ProductController@index')->name('products.index');

Route::get('products/create','ProductController@create')->name('products.create');

Route::post('products','ProductController@store')->name('products.store');

Route::get('products/{id}/edit','ProductController@edit')->name('products.edit');

Route::put('products/{id}','ProductController@update')->name('products.update');

Route::delete('products/{id}','ProductController@destroy')->name('products.destroy');

/*----- CARTS -----*/

Route::get('catalogs','ProductController@catalog_index')->name('catalogs.index');

Route::get('carts','CartController@index')->name('carts.index');

Route::post('carts','CartController@store')->name('carts.store');

Route::get('carts/{id}','CartController@show')->name('carts.show');

Route::get('carts/{id}/edit','CartController@edit')->name('carts.edit');

Route::put('carts/{id}','CartController@update')->name('carts.update');

Route::delete('carts/{id}','CartController@destroy')->name('carts.destroy');

Route::get('carts-clear','CartController@clear')->name('carts.clear');

/*----- ORDERS -----*/

Route::post('orders','OrderController@store')->name('orders.store');
