<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generateController extends Controller
{
    	public function index(){
		return view('blogs');
	}
}