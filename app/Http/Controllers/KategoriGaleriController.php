<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriGaleri;

class KategoriGaleriController extends Controller
{
    public function index(){

    	$listKategoriGaleri=KategoriGaleri::all();

    	return view ('kategori_galeri.index',compact('listKategoriGaleri'));
    	//return view (view: 'kategori_galeri.index')->with('data',$listKategoriGaleri);
    }

     public function show($id){
    	//eloguent
    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first(); //select *from kategori_artikel where 'id'=$id limit 1
    	$KategoriGaleri=KategoriGaleri::find($id);

    	return view ('kategori_galeri.show',compact('KategoriGaleri'));
    }
}