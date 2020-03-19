<?php

use Illuminate\Http\Request;
Use App\Productos;

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

// products 
Route::post('AddProducts', 'ProductsController@store')->name('AddProducts');
Route::put('UpdateProducts/{productos}', 'ProductsController@update')->name('UpdateProducts');
Route::delete('DeleteProductos/{productos}', 'ProductsController@delete')->name('DeleteProductos');
