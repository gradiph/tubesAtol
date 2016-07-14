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

Route::get('/', 'MainController@home');
Route::get('login','MainController@login');
Route::get('logout','MainController@logout');
Route::post('processLogin', 'MainController@prosesLogin');

Route::get('pemilik-usaha','PemilikUsahaController@home');

Route::get('wilayah','WilayahController@home');

Route::get('sektor-usaha','SektorUsahaController@home');

Route::get('data-usaha','DataUsahaController@home');

Route::get('laporan','LaporanController@home');

Route::get('user/{id}','UserController@setting');