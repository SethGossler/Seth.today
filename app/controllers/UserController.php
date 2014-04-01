<?php

class UserController extends \BaseController {

	public function index() {
		return View::make("userLogin");
	}

	public function login() {
		$email = Input::get("email");
		$password = Input::get("password");
		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
			return Redirect::to('posts');
		}
		else {
			echo "failed!";
		}
	}

}