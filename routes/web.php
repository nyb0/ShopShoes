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
    Route::get('/', 'AdminController@allProducts');

    Route::get('/create-product', 'AdminController@createProduct');
    Route::post('/create-product', 'AdminController@saveProduct');
    
    Route::get('/edit-product/{product_id}', 'AdminController@editProduct');
    Route::post('/edit-product/{product_id}', 'AdminController@saveProduct');
    
    Route::get('/delete-product/{product_id}', 'AdminController@deleteProduct');

    Route::get('/orders', 'AdminController@getOrders');
});

Route::prefix('basket')->group(function(){
    Route::get('/', 'BasketController@index');
    Route::post('/', 'BasketController@addToBasket');
    Route::get('/make-order', 'BasketController@makeOrder');
    Route::post('/delete-from-basket', 'BasketController@deleteFromBasket');
});

Route::get('/orders', 'OrdersController@getOrders');

Route::get('/search', 'GalleryController@search');

Route::get('/', 'GalleryController@index');
Route::get('/{category_id}', 'GalleryController@category');
Route::get('/{category_id}/{product_id}', 'GalleryController@product');