<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galericontroller extends Controller
{
       public function index(){
    	
    	$listgaleri=galeri::all(); 

    	return view ('galeri.index',compact('listgaleri'));
    	//return view ('galeri.index'->with('data',$listgaleri);
    }
}

