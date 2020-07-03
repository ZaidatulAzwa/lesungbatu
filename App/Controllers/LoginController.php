<?php

namespace Controllers;

use Dedelang\View\View;

use Models\loginModel;

use Dedelang\Library\Authentication as Auth;

use Dedelang\Http\Request as req;

class LoginController{

	public static function index(){

		if(http_method()==="POST"){

			Auth::setAuthData(['*']);

			Auth::doLogin();

			Auth::setAuth('users')->redirectPath('users');

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

	public static function listed(){
			 $dataResult = loginModel::getAll();
			 //pre($dataResult);
			 view::render('login/list', ['dataResult'=> $dataResult]);
	 }

	 public static function update(){
			 if (http_method()==="POST"):

					$dataResult = loginModel::updated();

					 self::listed();

			 else:
					$dataResult = loginModel::getoneRow();
					 view::render('login/update',['singleRow'=>$dataResult]);
			 endif;
			 //echo "update";
			 //$dataResult = CoursesModels::update();
			 //pre($dataResult);
	 }

	 public static function remove(){
			 $dataResult = loginModel::delete();
			 pre($dataResult);
	 }

	public static function Logout(){

		Auth::logout('login');

	}


}

?>
