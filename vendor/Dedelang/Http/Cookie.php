<?php
namespace Dedelang\Http;


class Cookie{

	public static function set($key,$value, $hours = 5){

			setcookie($key, $value, time() + $hours, '', '', false,true);

			setcookie('error_status', TRUE, time() + $hours, '', '', false,true);

	}

	public static function get($key, $default = null){

			return get_array($_COOKIE, $key, $default);

	}




	public static function has($key){

			return array_key_exists($key, $_COOKIE);

	}

	public function remove($key){

			setcookie($key, null, -1);

			unset($_COOKIE[$key]);

	}

	public function all(){

			return $_COOKIE;

	}

	public function destroy(){

			foreach(array_keys(self::all()) AS $key){

				self::remove($key);

			}


	}

}
?>
