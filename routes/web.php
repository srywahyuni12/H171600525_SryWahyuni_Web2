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
//get, post,put/patch,delete
Route::get('/tambah/{a}/{b}','BelajarController@tambah');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kategori_artikel','KategoriArtikelController');
Route::get('kategori_artikel/trash','KategoriArtikelController@trash')->name('kategori_artikel.trash');

Route::resource('kategori_berita','KategoriBeritaController');
Route::get('kategori_berita/trash','KategoriBeritaController@trash')->name('kategori_berita.trash');

Route::resource('kategori_galeri','KategoriGaleriController');
Route::get('kategori_galeri/trash','KategoriGaleriController@trash')->name('kategori_galeri.trash');

Route::resource('kategori_pengumuman','KategoriPengumumanController');
Route::get('kategori_pengumuman/trash','KategoriPengumumanController@trash')->name('kategori_gpengumuman.trash');


Route::get('/artikel', 'artikelController@index')->name('artikel.index');
Route::get('/artikel/create', 'artikelController@create')->name('artikel.create');
Route::post('/artikel', 'artikelController@store')->name('artikel.store');
Route::get('/artikel/{id}','artikelController@show')->name('artikel.show');
Route::get('/artikel/{id}/edit','artikelController@edit')->name('artikel.edit');
Route::patch('/artikel/{id}','artikelController@update')->name('artikel.update');
Route::delete('/artikel/{id}','artikelController@destroy')->name('artikel.destroy');

Route::get('/berita', 'beritaController@index')->name('berita.index');
Route::get('/berita/create', 'beritaController@create')->name('berita.create');
Route::post('/berita', 'beritaController@store')->name('berita.store');
Route::get('/berita/{id}','beritaController@show')->name('berita.show');
Route::get('/berita/{id}/edit','beritaController@edit')->name('berita.edit');
Route::patch('/berita/{id}','beritaController@update')->name('berita.update');
Route::delete('/berita/{id}','beritaController@destroy')->name('berita.destroy');

Route::get('/galeri', 'galeriController@index')->name('galeri.index');
Route::get('/galeri/create', 'galeriController@create')->name('galeri.create');
Route::post('/galeri', 'galeriController@store')->name('galeri.store');
Route::get('/galeri/{id}','galeriController@show')->name('galeri.show');
Route::get('/galeri/{id}/edit','galeriController@edit')->name('galeri.edit');
Route::patch('/galeri/{id}','galeriController@update')->name('galeri.update');
Route::delete('/galeri/{id}','galeriController@destroy')->name('galeri.destroy');


Route::get('/pengumuman', 'pengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'pengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman', 'pengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}','pengumumanController@show')->name('pengumuman.show');
Route::get('/pengumuman/{id}/edit','pengumumanController@edit')->name('pengumuman.edit');
Route::patch('/pengumuman/{id}','pengumumanController@update')->name('pengumuman.update');
Route::delete('/pengumuman/{id}','pengumumanController@destroy')->name('pengumuman.destroy');