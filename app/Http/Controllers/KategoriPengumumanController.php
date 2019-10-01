<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){

    	$listKategoriPengumuman=KategoriPengumuman::all();

    	return view ('kategori_pengumuman.index',compact('listKategoriPengumuman'));
    	//return view (view: 'kategori_pengumuman.index')->with('data',$listKategoriPengumuman);
    }

     public function show($id){
    	//eloguent
    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); //select *from kategori_artikel where 'id'=$id limit 1
    	$KategoriPengumuman=KategoriPengumuman::find($id);

    	return view ('kategori_pengumuman.show',compact('KategoriPengumuman'));
    }
}