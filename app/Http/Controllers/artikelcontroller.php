<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikelcontroller extends Controller
{
      public function index(){
    	
    	$listartikel=artikel::all(); 

    	return view ('artikel.index',compact('listartikel'));
    	//return view ('artikel.index'->with('data',$listartikel);
    }
}
