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
Route::get('pemilik-usaha/{id}/aktifkan','PemilikUsahaController@aktifkan');
Route::get('pemilik-usaha/{id}/non-aktifkan','PemilikUsahaController@nonAktifkan');
Route::get('pemilik-usaha/{id}/ubah','PemilikUsahaController@ubah');
Route::post('pemilik-usaha/{id}/ubah/proses','PemilikUsahaController@prosesUbah');
Route::get('pemilik-usaha/{id}/hapus','PemilikUsahaController@hapus');
Route::post('pemilik-usaha/{id}/hapus/proses','PemilikUsahaController@prosesHapus');

Route::get('wilayah','WilayahController@home');
Route::get('wilayah/kecamatan/baru','WilayahController@tambahKecamatan');
Route::post('wilayah/kecamatan/baru/proses','WilayahController@prosesTambahKecamatan');
Route::get('wilayah/kecamatan/{id}/ubah','WilayahController@ubahKecamatan');
Route::post('wilayah/kecamatan/{id}/ubah/proses','WilayahController@prosesUbahKecamatan');
Route::get('wilayah/kecamatan/{id}/hapus','WilayahController@hapusKecamatan');
Route::post('wilayah/kecamatan/{id}/hapus/proses','WilayahController@prosesHapusKecamatan');
Route::get('wilayah/kecamatan/{id_kec}/kelurahan/baru','WilayahController@tambahKelurahan');
Route::post('wilayah/kecamatan/{id_kec}/kelurahan/baru/proses','WilayahController@prosesTambahKelurahan');
Route::get('wilayah/kecamatan/{id_kec}/kelurahan/{id_kel}/ubah','WilayahController@ubahKelurahan');
Route::post('wilayah/kecamatan/{id_kec}/kelurahan/{id_kel}/ubah/proses','WilayahController@prosesUbahKelurahan');
Route::get('wilayah/kecamatan/{id_kec}/kelurahan/{id_kel}/hapus','WilayahController@hapusKelurahan');
Route::post('wilayah/kecamatan/{id_kec}/kelurahan/{id_kel}/hapus/proses','WilayahController@prosesHapusKelurahan');

Route::get('sektor-usaha','SektorUsahaController@home');
Route::get('sektor-usaha/baru','SektorUsahaController@tambahSektor');
Route::post('sektor-usaha/baru/proses','SektorUsahaController@prosesTambahSektor');
Route::get('sektor-usaha/{id}/ubah','SektorUsahaController@ubahSektor');
Route::post('sektor-usaha/{id}/ubah/proses','SektorUsahaController@prosesUbahSektor');
Route::get('sektor-usaha/{id}/hapus','SektorUsahaController@hapusSektor');
Route::post('sektor-usaha/{id}/hapus/proses','SektorUsahaController@prosesHapusSektor');

Route::get('data-usaha','UsahaController@home');
Route::get('data-usaha/{id}/aktifkan','UsahaController@aktifkan');
Route::get('data-usaha/{id}/non-aktifkan','UsahaController@nonAktifkan');
Route::get('data-usaha/{id}/ubah','UsahaController@ubah');
Route::post('data-usaha/{id}/ubah/proses','UsahaController@prosesUbah');
Route::get('data-usaha/{id}/hapus','UsahaController@hapus');
Route::post('data-usaha/{id}/hapus/proses','UsahaController@prosesHapus');

Route::get('laporan','LaporanController@home');

Route::get('user/{id}','UserController@setting');