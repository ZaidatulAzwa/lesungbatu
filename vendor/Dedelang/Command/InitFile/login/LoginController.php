<?php

namespace Controllers;

use Dedelang\View\View;

use Models\LoginModel;

use Dedelang\Library\Authentication as Auth;

use Dedelang\Http\Request as req;

class LoginController{

	public static function index(){

		if(http_method()==="POST"){

			Auth::setAuthData(['*']);

			Auth::doLogin();

			Auth::setAuth('admin')->redirectPath('home');

			Auth::endLogin();

		}else{

			View::render('login/Login');

		}

	}

	public static function register(){

		if(http_method()==="POST"){

			req::postAdd(['user_role'=>'users']);

			Auth::doRegister('users');

			View::render('login/Login');

		}else{

			View::render('login/Register');

		}

	}

	public static function updatePassword(){

		if(http_method()==="POST"){

			if(Auth::updatePassword('users')){

				self::logout();

			}else{
				View::render('login/UpdatePassword');
			}

		}else{

				View::render('login/UpdatePassword');

		}

	}


	public static function Logout(){

		Auth::logout('login');

	}

}

?>
