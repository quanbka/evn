<?php

use Illuminate\Http\Request;


/**
 * Public api
 */
Route::get('/user', 'Service\ApiService@index');

Route::get('/price', 'Service\PriceService@index');

/**
 * Authenticate api
 */
Route::middleware('auth:api')->group(function () {
    Route::get('/{model}', 'Service\ApiService@index');
    Route::post('/{model}', 'Service\ApiService@store');
    Route::put('/{model}/{id}', 'Service\ApiService@update');
    Route::patch('/{model}/{id}', 'Service\ApiService@update');
    Route::delete('/{model}/{id}', 'Service\ApiService@delete');
    Route::post('/{model1}/{id1}/{model2}/{id2}', 'Service\ApiService@attach');
});
