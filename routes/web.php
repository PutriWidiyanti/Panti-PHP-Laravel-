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

Route::get('/Diri', 'DiriController@index');
Route::get('/Diri/tambah', 'DiriController@tambah');
Route::post('/Diri/store', 'DiriController@store');
Route::get('/Diri/edit/{id}', 'DiriController@edit');
Route::post('/Diri/update', 'DiriController@update');
Route::get('/Diri/hapus/{id}', 'DiriController@hapus');
Route::get('/Diri/awal', 'DiriController@awal');
Route::get('/Diri/about', 'DiriController@about');
Route::get('/Diri/kegiatan', 'DiriController@kegiatan');
Route::get('/Diri/kontak', 'DiriController@kontak');
Route::get('/Diri/admin', 'DiriController@admin');
Route::post('/Diri/masuk', 'DiriController@masuk');
Route::get('/Diri/sukses', 'DiriController@sukses');
Route::get('/Diri/notif', 'DiriController@notif');
Route::get('/Diri/crud', 'DiriController@crud');
Route::get('/Diri/input', 'DiriController@input');
Route::post('/Diri/simpan', 'DiriController@simpan');
Route::get('/Diri/ubah/{id}', 'DiriController@ubah');
Route::get('/Diri/formAdmin', 'DiriController@formAdmin');
Route::get('/Diri/crudKegiatan','DiriController@crudKegiatan');
Route::get('/Diri/inputKegiatan', 'DiriController@inputKegiatan');
Route::post('/Diri/inKegiatan', 'DiriController@inKegiatan');
Route::get('/Diri/ubahKegiatan/{id}', 'DiriController@ubahKegiatan');
Route::post('/Diri/upKegiatan', 'DiriController@upKegiatan');
Route::get('/Diri/hapusKegiatan/{id}', 'DiriController@hapusKegiatan');
Route::get('/Diri/crudDonasi', 'DiriController@crudDonasi');
Route::get('/Diri/inputDonasi','DiriController@inputDonasi');
Route::post('/Diri/inDonasi', 'DiriController@inDonasi');
Route::get('/Diri/ubahDonasi/{id}', 'DiriController@ubahDonasi');
Route::post('/Diri/upDonasi', 'DiriController@upDonasi');
Route::get('/Diri/hapusDonasi/{id}', 'DiriController@hapusDonasi');
Route::get('/Diri/crudDonatur', 'DiriController@crudDonatur');
Route::get('/Diri/inputDonatur', 'DiriController@inputDonatur');
Route::post('/Diri/inDonatur', 'DiriController@inDonatur');
Route::get('/Diri/ubahDonatur/{id_donatur}', 'DiriController@ubahDonatur');
Route::post('/Diri/upDonatur', 'DiriController@upDonatur');
Route::get('/Diri/hapusDonatur/{id_donatur}', 'DiriController@hapusDonatur');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

