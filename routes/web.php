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
Route::get('/kategori_artikel', 'KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create', 'KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}','KategoriArtikelController@show')->name('kategori_artikel.show');
Route::get('/kategori_artikel/{id}/edit','KategoriArtikelController@edit')->name('kategori_artikel.edit');
Route::patch('/kategori_artikel/{id}','KategoriArtikelController@update')->name('kategori_artikel.update');


Route::get('/kategori_berita', 'KategoriBeritaController@index')->name('kategori_berita.index');
Route::get('/kategori_berita/create', 'KategoriBeritaController@create')->name('kategori_berita.create');
Route::post('/kategori_berita','KategoriBeritaController@store')->name('kategori_berita.store');
Route::get('/kategori_berita/{id}','KategoriBeritaController@show')->name('kategori_berita.show');
Route::get('/kategori_berita/{id}/edit','KategoriBeritaController@edit')->name('kategori_berita.edit');
Route::patch('/kategori_berita/{id}','KategoriBeritaController@update')->name('kategori_berita.update');


Route::get('/kategori_galeri', 'KategoriGaleriController@index')->name('kategori_galeri.index');
Route::get('/kategori_galeri/create', 'KategoriGaleriController@create')->name('kategori_galeri.create');
Route::post('/kategori_galeri','KategoriGaleriController@store')->name('kategori_galeri.store');
Route::get('/kategori_galeri/{id}','KategoriGaleriController@show')->name('kategori_galeri.show');
Route::get('/kategori_galeri/{id}/edit','KategoriGaleriController@edit')->name('kategori_galeri.edit');
Route::patch('/kategori_galeri/{id}','KategoriGaleriController@update')->name('kategori_galeri.update');



Route::get('/kategori_pengumuman', 'KategoriPengumumanController@index')->name('kategori_pengumuman.index');
Route::get('/kategori_pengumuman/create', 'KategoriPengumumanController@create')->name('kategori_pengumuman.create');
Route::post('/kategori_pengumuman','KategoriPengumumanController@store')->name('kategori_pengumuman.store');
Route::get('/kategori_pengumuman/{id}','KategoriPengumumanController@show')->name('kategori_pengumuman.show');
Route::get('/kategori_pengumuman/{id}/edit','KategoriPengumumanController@edit')->name('kategori_pengumuman.edit');
Route::patch('/kategori_pengumuman/{id}','KategoriPengumumanController@update')->name('kategori_pengumuman.update');



Route::get('/artikel', 'artikelController@index')->name('artikel.index');
Route::get('/artikel/create', 'artikelController@create')->name('artikel.create');
Route::post('/artikel', 'artikelController@store')->name('artikel.store');
Route::get('/artikel/{id}','artikelController@show')->name('artikel.show');

Route::get('/berita', 'beritaController@index')->name('berita.index');
Route::get('/berita/create', 'beritaController@create')->name('berita.create');
Route::post('/berita', 'beritaController@store')->name('berita.store');
Route::get('/berita/{id}','beritaController@show')->name('berita.show');

Route::get('/galeri', 'galeriController@index')->name('galeri.index');
Route::get('/galeri/create', 'galeriController@create')->name('galeri.create');
Route::post('/galeri', 'galeriController@store')->name('galeri.store');
Route::get('/galeri/{id}','galeriController@show')->name('galeri.show');

Route::get('/pengumuman', 'pengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'pengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman', 'pengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}','pengumumanController@show')->name('pengumuman.show');