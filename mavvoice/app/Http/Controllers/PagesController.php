<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex(){
		return view("pages.welcome");
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