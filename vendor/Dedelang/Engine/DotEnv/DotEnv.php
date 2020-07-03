<?php
namespace Dedelang\Engine\DotEnv;

class DotEnv{

	protected static $datas = [];

	public static function Load($filepath){

		self::process($filepath);

		return new self();

	}

	public static function process($filepath){

		$pattern = '/\n/';

    $replace = ',';

 		ob_start();

 		require_once $filepath;

 		$content = explode("\n", trim(ob_get_clean()));

 		self::$datas = $content;

 		self::data();

 		return new self();

	}

	public static function data(){

 		foreach (self::$datas as $data) {

 			$key = self::get_key($data);

			$value = self::get_value($data);

			(!empty($key) ? putenv("$key=$value") : '');

 		}

 	}

	private static function get_key($str){

			return str_replace(' ', '', strtok($str, '=' ));


 	}

	private static function get_value($str){

 			return str_replace(' ', '', ltrim(strstr($str, '='), '='));

  }



}


 ?>
