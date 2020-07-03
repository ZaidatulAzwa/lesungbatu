<?php
namespace Dedelang\Http;

class Url{

	public static function redirect($path){

			 header('location:' . getenv('BASE_URL').$path);

			 die();

	 }
}



 ?>
