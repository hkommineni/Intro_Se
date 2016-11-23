<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getSingle($slug){
    	//fetch from DB based on slug
    	$post = Post::where('slug', '=', $slug)->first();

    	//return the view and pass in the post object
    	return view('mavoice.single')->withPost($post);

    }
}
