<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'anunciante'], function () {
    Route::get('/', 'AnuncianteController@index');

    Route::post('login', 'AnuncianteController@login');
    Route::get('logout', 'AnuncianteController@logout');

    Route::group(['middleware' => 'anunciantesauth'],function(){
        Route::get('/home', 'AnuncianteController@home');
        Route::get('/eventos', 'AnuncianteController@eventos');
    });


});



Auth::routes();

Route::get('/home', 'HomeController@index');
