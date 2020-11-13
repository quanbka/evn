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


// Route::get('/', 'Frontend\IndexController@index');
Route::get('/', 'Frontend\ShopController@shop')->name('shop');
Route::get('/gioi-thieu', 'Frontend\ShopController@about')->name('about');
Route::get('/ho-tro', 'Frontend\ShopController@support')->name('support');
Route::get('/san-pham', 'Frontend\ShopController@sanPham')->name('product');
Route::get('/nha-cung-cap', 'Frontend\ShopController@nhaCungCap')->name('provider');
Route::get('/lien-he', 'Frontend\ShopController@contact')->name('contact');
Route::get('/tu-van', 'Frontend\ShopController@tuVan')->name('tuVan');

Route::get('/index.html', function () {
  return redirect('/');
});
Route::get('/intro.html', function () {
  return redirect('/gioi-thieu');
});
Route::get('/support.html', function () {
  return redirect('/ho-tro');
});
Route::get('/contact.html', function () {
  return redirect('/lien-he');
});
Route::get('/product.html', function () {
  return redirect('/san-pham');
});
Route::get('/provider.html', function () {
  return redirect('/nha-cung-cap');
});
Route::get('/advisory.html', function () {
  return redirect('/tu-van');
});
// Route::get('/cua-hang/{slug}_{id}.html', 'Frontend\ShopController@category')->name('danh-muc-san-pham');
// Route::get('/san-pham/{slug}_{id}.html', 'Frontend\ShopController@product')->name('chi-tiet-san-pham');
// Route::get('/danh-muc/{slug}_{id}.html', 'Frontend\BlogController@category')->name('danh-muc-bai-viet');
// Route::get('/bai-viet/{slug}_{id}.html', 'Frontend\BlogController@post')->name('chi-tiet-bai-viet');
// Route::get('/hang-moi-ve', 'Frontend\ShopController@recent');
// Route::get('/product/{keyword}', 'Frontend\ShopController@redirect');
// Route::get('/dang-giam-gia', 'Frontend\ShopController@sale');
// Route::get('/tim-kiem', 'Frontend\ShopController@search')->name('search');
// Route::get('/bo-suu-tap', 'Frontend\ShopController@collection');
// Route::get('/thiet-ke-noi-that', 'Frontend\ShopController@design');
// Route::get('/dat-hang/{id?}', 'Frontend\ShopController@order')->name('dat-hang');
// Route::post('/dat-hang', 'Frontend\ShopController@sendOrder')->name('send-order');
// route::get('/sitemap.xml', 'Frontend\IndexController@sitemap');


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
