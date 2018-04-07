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

Route::get('/', 'FrontController@index')->name('/');

Route::get ('/cigarette', 'FrontController@allproducts')->name('tousLesProduits');

Route::get('/produit', 'FrontController@produit')->name('produit');

Auth::routes();

Route::get('/admin', 'HomeController@admin')->name('home');

// Route::get('/admin', 'FrontController@admin')->name('admin');
