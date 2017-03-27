<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function generateBlog($blog-id){
    	$post = post::where('id','=',$blog-id);
    	return view('post',$post);
    	];
    }
}0