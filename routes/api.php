<?php

use Illuminate\Http\Request;

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');
}

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    exit(0);
}

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
