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

Auth::routes();

Route::prefix('admin')->group(function(){
    Route::get('/', 'AdminController@index');
    Route::get('/create-product', 'AdminController@createProduct');
    Route::post('/create-product', 'AdminController@saveProduct');
    Route::get('/edit-product', 'AdminController@editProduct');
});

Route::get('/home', 'HomeController@home');
Route::get('/basket', 'BasketController@index');

Route::get('/', 'GalleryController@index');
Route::get('/{category_id}', 'GalleryController@category');
Route::get('/{category_id}/{product_id}', 'GalleryController@product');