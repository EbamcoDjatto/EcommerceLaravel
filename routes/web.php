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
Route::get('/',[
   'uses' => 'FrontController@index',

   'as' => 'index'
]);

Auth::routes();

Route::get('/product/{id}',[
   'uses' => 'FrontController@SingleProduct',

   'as' => 'product.single'
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductsController');
