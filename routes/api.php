<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
	Route::get('penyewaan', 'PenyewaanController@index');
    Route::post('penyewaan', 'PenyewaanController@store');
    Route::put('/penyewaan/{id}', 'PenyewaanController@update');
    Route::delete('/penyewaan/{id}', 'PenyewaanController@destroy');
