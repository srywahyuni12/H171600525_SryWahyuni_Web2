<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beritacontroller extends Controller
{
       public function index(){
    	
    	$listberita=berita::all(); 

    	return view ('berita.index',compact('listberita'));
    	//return view ('berita.index'->with('data',$listberita);
    }
}


