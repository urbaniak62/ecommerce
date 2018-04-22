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

// *********************************************************************************
//                              ROUTE FRONT CONTROLLER
// *********************************************************************************

Route::get('/', 'FrontController@index')->name('/');

Route::get ('/vitrine', 'FrontController@allproducts')->name('vitrine');

Route::get('/produit', 'FrontController@produit')->name('produit');

Route::get('/cigarette', 'FrontController@cigarette')->name('cigarette') ;

Route::get('/eliquide', 'FrontController@eliquide')->name('eliquide');

Route::get('/contact', 'FrontController@contact')->name('contact');

Route::get('/panier', 'FrontController@panier')->name('panier');



// *********************************************************************************
//                              ROUTE AUTH
// *********************************************************************************

Auth::routes();

// *********************************************************************************
//                              ROUTE !!!! CONTROLLER
// *********************************************************************************




