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
Route::get('/san-pham', 'Frontend\IndexController@product');

// Route::get('/system/user', 'System\IndexController@user')->name('system-user');
Route::get('/system/shop/product', 'System\ShopController@product')->name('system-shop-product');
Route::get('/system/shop/category', 'System\ShopController@category')->name('system-shop-category');
// Route::get('/system/shop/import', 'System\ShopController@showImport')->name('system-shop-import');
// Route::post('/system/shop/import', 'System\ShopController@import')->name('system-shop-import');
// Route::get('/system/order', 'System\ShopController@order')->name('system-shop-product');
Route::get('/system/blog/blog', 'System\BlogController@blog')->name('system-blog-post');
Route::post('/system/upload', 'System\IndexController@upload');
Route::get('/system/price', 'System\IndexController@price');
Route::post('/system/price', 'System\IndexController@updatePrice');
Route::get('/system/hotro-portal', 'System\IndexController@hotroPortal');

Route::get('/', 'Frontend\ShopController@handle');
Route::get('/system/index', 'System\IndexController@index');
Route::resource('/system/config', 'System\ConfigController');
Route::resource('/system/product', 'System\ProductController');
Route::get('/admin', function () {
    return redirect('/login');
});

Route::get('/{slug}', 'Frontend\ShopController@handle');
Route::get('/{page}/{slug}', 'Frontend\ShopController@handle');
Route::post('/{page}/{slug}', 'Frontend\ShopController@handle');
