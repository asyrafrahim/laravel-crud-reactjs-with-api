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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', 'API\ProductController@index')->name('products.index');
Route::post('/products', 'API\ProductController@store')->name('products.store');
Route::get('/products/{product}', 'API\ProductController@show')->name('products.show');
Route::patch('/products/{product}', 'API\ProductController@update')->name('products.update');
Route::delete('/products/{product}', 'API\ProductController@destroy')->name('products.destroy');