<?php

namespace Dedelang\Engine;

use Dedelang\Engine\Route;

class URL{

	protected static $get_num;

	protected static $vali = false;

	public function proper_road($road){

	  return (strstr($road, '/@', true) ? strstr($road, '/@', true) : $road);

	}

	public static function get(){

		$url = '/';

		(isset($_GET['url']) ? $url = $_GET['url'] : '');

		$result = self::get_array($url);

		self::$get_num = count($result);

		return $result;

	}

	public static function get_array($url){

		return explode('/', filter_var(rtrim(strtolower($url),'/'), FILTER_SANITIZE_URL));

	}

	public static function validation(){

		$result = '';

		$url = self::get();

		$urlnum = count($url);

		foreach (Route::routes() as $values) {

			$road =  self::get_array($values['url']);

			$roadnum = count($road);

			$valueMust = $urlnum - $roadnum;

			if($valueMust==count(array_diff_assoc($url,$road))){

				$result =  true;

				break;
			}
			$result = false;
		}
		return $result;
	}



	}
