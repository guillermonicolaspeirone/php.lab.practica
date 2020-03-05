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
//Login
Route::get('/', 'Auth\LoginController@loginform')->name('/')->middleware('guest');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Registro
Route::get('register', 'Auth\RegisterController@index')->name('register')->middleware('guest');
Route::post('register', 'Auth\RegisterController@index');

//Pages
Route::get('home', 'HomeController@index')->name('home') -> middleware('verified');

Route::get('Products', 'ProductsController@index')->name('Products') -> middleware('verified');
Route::post('Products', 'ProductsController@index')-> middleware('verified');

Route::get('Games', 'GamesController@index')->name('Games') -> middleware('verified');

//edit user
Route::get('Settings', 'Auth\EditUserController@index')->name('Settings') -> middleware('verified');
Route::post('Settings' , 'Auth\EditUserController@updateuser' )-> middleware('verified');

//Reset passeord
Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.token');
Route::post('password/reset', 'ResetPasswordController@reset');



Auth::routes(['verify' => true]);

