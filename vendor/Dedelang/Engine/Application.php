<?php
namespace Dedelang\Engine;

use Dedelang\Engine\Route;

use Dedelang\Engine\Loader;

use Dedelang\Engine\Controller;

use Dedelang\Engine\URL;

use Dedelang\Http\Request;

use Dedelang\Http\Url as link;

use Dedelang\Engine\Security\Attack;


class Application{

	protected static $action;

	protected static $method;

	protected static $class;

	protected static $session_level;

	protected static $session_value;

	protected static $error_url;

	protected static $type;



	public static function validationUrl(){

		if(!URL::validation()){

			include("App/Views/error/404.php");

			die();

		}
	}
	public static function run(){

			self::validationUrl();

			$url = URL::get();

			$urlnum = count($url);

			foreach (Route::routes() as $value) {

				$road =  URL::get_array($value['url']);
				// pre($road);

				$roadnum = count($road);

				$valueMust = $urlnum - $roadnum;

				if($valueMust==count(array_diff_assoc($url,$road))){

					self::get(array_diff_assoc($url,$road));

					self::$action = $value['action'];

					self::$method = $value['method'];

					self::$session_level = $value['session_level'];

					self::$type = $value['type'];

					self::$class = $value['class'];

					// self::$session_value = $value['session_value'];

					self::$error_url = $value['error_url'];

					self::forward();

         			break;
       			}
		  }

	}

	public static function forward(){

		(!empty(self::$session_level) ? self::check_authorization() : '');

		(http_method()==="POST" || http_method()==="GET" ? Controller::load(self::$action,self::$class) : Attack::display_error('Changing Request Method'));



	}

	public static function check_authorization(){

 		(isset($_SESSION[encrypt("user_role")])?(!in_array(encrypt($_SESSION[encrypt("user_role")],'d'), self::$session_level) ? link::redirect(self::$error_url) : '') : link::redirect(self::$error_url));

	}

	public static function get($datas){

		$x=1;

		foreach ($datas as $data) {

			$_GET['p'.$x] = $data;

			$x++;

		}

	}

	private static function error_result($e,$file="login Page"){

		include("vendor/Dedelang/View/Template/error.php");

		die();
	}


}
