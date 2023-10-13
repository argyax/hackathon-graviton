<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function trash(){
		return view('trash');
	}
 
	public function addTrash(){
		return view('addTrash');
	}
}
