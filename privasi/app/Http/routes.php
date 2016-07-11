<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@index');
Route::get('daftar', 'MainController@formDaftar');
Route::get('masuk', 'MainController@formLogin');
Route::get('tentang', 'MainController@viewTentang');

Route::get('data-usaha', 'UsahaController@viewUsaha');
