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
Route::get('/', 'HomeController@getHome');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'productos', 'middleware' => 'auth'], function(){

    Route::get('/', 'ProductoController@getIndex');

    Route::get('/show/{id}', 'ProductoController@getShow');

    Route::get('/create', 'ProductoController@getCreate');

    Route::post('create', 'ProductoController@postCreate');

    Route::get('/edit/{id}', 'ProductoController@getEdit');

    Route::put('edit/{id}', 'ProductoController@putEdit');
});


