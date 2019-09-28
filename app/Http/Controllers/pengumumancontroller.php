<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengumumancontroller extends Controller
{
       public function index(){
    	
    	$listpengumuman=pengumuman::all(); 

    	return view ('pengumuman.index',compact('listpengumuman'));
    	//return view ('pengumuman.index'->with('data',$listpengumuman);
    }
}

