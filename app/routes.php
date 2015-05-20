<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$posts = Post::all();

	$thisPost = $posts->first();
	$prevPost = Post::find($thisPost->id-1);
	$nextPost = Post::find($thisPost->id+1);

	return View::make('hello')
		->with(array("post"=>$thisPost, "prevPost"=>$prevPost, "nextPost"=>$nextPost));
});

Route::resource('posts', 'PostsController', array('before'=>'auth.basic'));
Route::resource('login', 'UserController');

Route::post('user/login', 'UserController@login');
