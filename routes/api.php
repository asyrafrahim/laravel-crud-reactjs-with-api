<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::resource('products', ProductController::class);

Route::get('/products', 'API\ProductController@index')->name('api:product:index');
Route::post('/products/create', 'API\ProductController@store')->name('api:product:store');
Route::get('/products/{product}', 'API\ProductController@show')->name('api:product:show');
Route::put('/products/{product}', 'API\ProductController@update')->name('api:product:update');
Route::delete('/products/{product}', 'API\ProductController@destroy')->name('api:product:destroy');