<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::prefix('accounts')->group(function () {
    Route::get('', 'AccountController@index');
    Route::post('', 'AccountController@store');
    Route::get('{id}', 'AccountController@show');
    Route::put('{id}', 'AccountController@update');
    Route::delete('{id}', 'AccountController@delete');
});
