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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/system/index', 'System\IndexController@index');
Route::get('/system/user', 'System\IndexController@user')->name('system-user');
Route::get('/system/shop/product', 'System\ShopController@product')->name('system-shop-product');
Route::get('/system/shop/category', 'System\ShopController@category')->name('system-shop-category');
Route::get('/system/shop/import', 'System\ShopController@showImport')->name('system-shop-import');
Route::post('/system/shop/import', 'System\ShopController@import')->name('system-shop-import');
Route::get('/system/order', 'System\ShopController@order')->name('system-shop-product');
Route::get('/system/blog/blog', 'System\BlogController@blog')->name('system-blog-post');
Route::get('/system/blog/category', 'System\BlogController@category')->name('system-blog-category');
Route::post('/system/upload', 'System\IndexController@upload');

Route::get('/', 'Frontend\ShopController@handle');
Route::get('/{slug}', 'Frontend\ShopController@handle');
