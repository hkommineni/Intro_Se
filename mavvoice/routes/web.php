<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Authentication routes
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);



// Registration Routes...
 Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
 Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

 // Categories
 Route::resource('categories','CategoryController', ['except'=> ['create']]);

 // Tags
 Route::resource('tags','TagController', ['except'=> ['create']]);


Route::get('mavoice/{slug}',['as' => 'mavoice.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('mavoice',['as' => 'mavoice.index', 'uses' => 'BlogController@getIndex']);
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getabout');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index');
