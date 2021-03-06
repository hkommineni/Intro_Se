<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

	public function getIndex(){
		$posts = Post::orderBy('created_at','desc')->limit(4)->get();
		return view("pages.welcome")->withPosts($posts );
	}

	public function getAbout(){
		$first = 'Harish';
		$last = 'Kommineni';
		$full = $first . " " . $last;
		$email = 'hkommineni@unomaha.edu';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $full;
		return view("pages.about")->withData($data);

	}

	public function getContact(){
		return view("pages.contact");

	}

	public function postContact(){


	}
}