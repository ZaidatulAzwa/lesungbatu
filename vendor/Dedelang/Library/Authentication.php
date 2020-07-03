<?php

namespace Dedelang\Library;

use Dedelang\Engine\DB\Query;

use Dedelang\Http\Session;

use Dedelang\Http\Cookie;

use Dedelang\Http\Flash;

use Dedelang\Http\Url as url;

use Dedelang\Http\Request;

use Dedelang\Engine\Validate as vali;

class Authentication{

	protected static $table;

	protected static $where;

	protected static $username;

	protected static $password;

	protected static $salt;

	protected static $profile;

	protected static $successPath;

	protected static $failPath;

	protected static $roleAuth;

	protected static $numrows=0;

	protected static $setAuthDataValue = [];



	public static function doRegister($table){

		self::passwordPolicyRegister();

		$salt = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 10)), 0, 25);

		$password = hash('sha512', $salt.Request::post('user_password').$salt);

		Request::postAdd(['user_password'=>$password,"user_salt"=>$salt]);

		Request::postRemove(['user_password_repeat']);

		(TotalRows()? self::failLogin("Invalid process: username or email can't be same"):Query::save($table));

	}

	private static function passwordPolicyRegister(){

		self::$failPath = 'register';

		(strlen(Request::post('user_password')) < 8 ? self::failLogin("Invalid password policy: password must be more than 8 character") : '');

		(Request::post('user_password') != Request::post('user_password_repeat') ? self::failLogin("Invalid password policy: password don't match") :'');

		self::$numrows = Query::select("user_username,user_email")
										 ->table("users")
										 ->where("user_username","=",Request::post('user_username'))
										 ->or('user_email','=',Request::post('user_username'))
										 ->getAll();

	}

	public static function doUpdate($table){

		self::passwordPolicyUpdate();

		$salt = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 10)), 0, 25);

		$password = hash('sha512', $salt.Request::post('new_password').$salt);

		Request::postUpdate(['new_password'=>$password,"user_salt"=>$salt]);

		Request::postRemove(['confirm_password']);

		(TotalRows()? self::failLogin("Invalid process: username or email can't be same"):Query::save($table));

	}

	private static function passwordPolicyUpdate(){

		self::$failPath = 'update/';

		(strlen(Request::post('new_password')) < 8 ? self::failLogin("Invalid password policy: password must be more than 8 character") : '');

		(Request::post('new_password') != Request::post('confirm_password') ? self::failLogin("Invalid password policy: password don't match") :'');

		self::$numrows = Query::select("user_username,user_email")
										 ->table("users")
										 ->where("user_username","=",Request::post('user_username'))
										 ->or('user_email','=',Request::post('user_username'))
										 ->getAll();

	}

	public static function doLogin(){

		self::$username = Request::post('user_username');

		self::$password = Request::post('user_password');

		self::$failPath= "/".$_GET['url'];

		(empty(self::$username)? self::failLogin("Please insert empty field") : self::verifyUsername());

	 	(empty(self::$password)? self::failLogin("Please insert empty field") : self::verifyPassword());

		self::passwordPolicy();

		return new self();

	}

	public static function passwordPolicy(){

		(strlen(Request::post('user_password')) < 8 ? self::failLogin("Invalid password policy") : '');

	}

	private static function verifyUsername(){

		$result = Query::table('users')
						->select('user_salt')
						->where("user_username","=",self::$username)
						->or('user_email','=',self::$username)
						->getOne();

		($result ? self::$salt = $result->user_salt :self::failLogin());

	}

	public static function setAuthData($AuthDataInArray){


		 self::$setAuthDataValue = $AuthDataInArray;

	}

	private static function verifyPassword(){

		$password = self::hashing(self::$password);

		$result = Query::table('users')
						->select(self::$setAuthDataValue)
						->where('user_password','=',$password)
						->getOne();

		self::$profile = $result;

		($result ? self::set_profile():self::failLogin());

		return $result;

	}

	private static function hashing($password){

		$salt_value = self::$salt;

		return self::$password = hash('sha512', $salt_value.$password.$salt_value);

	}


 private static function set_profile(){

	 foreach (self::$profile as $key => $value) {

					Session::set($key, $value);

	 }


 }

 private static function failLogin($msg = "Invalid Username or password"){

	 Cookie::set("FailLogin",$msg);

	 url::redirect(self::$failPath);

	 die();
 }


 public static function setPath($successPath=null,$failPath=null){

	 self::$successPath = '/'.$successPath;

	 self::$failPath = '/'.$failPath;

	 return new self();
 }

 public static function setAuth($roleAuth){

	 	self::$roleAuth = $roleAuth;

		return new self();
 }

 public static function redirectPath($successPath){

	 	$successPath = ($successPath===$_GET['url'] || strtolower($_GET['url'])==="login"?$successPath:substr($_GET['url'],0,-6));

	 	self::$successPath = '/'.$successPath;

		(self::$roleAuth===getAuth('user_role') ? url::redirect(self::$successPath):'');

		return new self();
 }

 public static function logout($url = null){

	Session::remove('user_id');
	Session::remove('user_no');
	Session::remove('user_role');

	Url::redirect('/'.$url);

 }

 public static function updatePassword(){

	 $statusProcess = false;


	 self::$username = getAuth('user_username');

	 self::$password = Request::post('current_password');

	 $NewPassword = Request::post('new_password');

	 $Confirmpassword = Request::post('confirm_password');

	 if($NewPassword === $Confirmpassword){

		 self::verifyUsername();

		 $password = self::hashing(self::$password);

		 $result = Query::table('users')
						 ->select('*')
						 ->where('user_password','=',$password)
						 ->getOne();

		 if(!empty($result)){
			 $result = Query::table('users')
							 ->update('user_password')
							 ->values(self::hashing($NewPassword))
							 ->where('user_id','=',getAuth('user_id'))
							 ->run();

			  Flash::set("success_msg","Success changes new password");
			 	$statusProcess = true;

		 }else{

			 Flash::set("error_msg","Invalid password policy: your current password don't match");

		 }

	 }else{
		 Flash::set("error_msg","Invalid password policy: your new password don't match");

	 }


	 return $statusProcess;


 }




}



 ?>
