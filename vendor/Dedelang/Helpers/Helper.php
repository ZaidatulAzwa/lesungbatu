<?php
use Dedelang\Engine\Validate as Vali;

use Dedelang\Http\Cookie;

use Dedelang\Engine\DB\Query;


if (! function_exists('e_msg')) {

	function e_msg($field){

		return Vali::msg($field);

 	}
 }

 if (! function_exists('extend')) {

 	function extend($file){

 		include "App/Views/$file.dagger.php";

  	}
  }


	if (! function_exists('csrf_token')) {

	 function csrf_token(){

		 return $_SESSION['token'] = bin2hex(random_bytes(3).str_shuffle(getenv('KEY_SECRET')));

		 }
	 }

	if (! function_exists('day_diff')) {

  	function day_diff($firstdate, $seconddate){

			$diff=date_diff(date_create($firstdate),date_create($seconddate));
			return $diff->format("%a");

   	}
   }

 if (! function_exists('base_url')) {

 	function base_url($uri=''){

 		return getenv('BASE_URL')."/".$uri;

  	}
  }

	if (! function_exists('base_css')) {

  	function base_css($uri){

  		return getenv('BASE_URL')."/public/css/".$uri;

   	}
   }
	 if (! function_exists('base_js')) {

   	function base_js($uri){

   		return getenv('BASE_URL')."/public/js/".$uri;

    	}
    }
		if (! function_exists('base_img')) {

    	function base_img($uri){

    		return getenv('BASE_URL')."/public/images/".$uri;

     	}
     }

		 if (! function_exists('base_error')) {

     	function base_error($uri){

     		return getenv('BASE_URL')."/public/error/".$uri;

      	}
      }

if (! function_exists('callback_value')) {

	function callback_value($field){

		return Vali::value($field);

	 }

}

if (! function_exists('http_method')) {

	function http_method(){

		return strtoupper(filter_input( INPUT_SERVER, 'REQUEST_METHOD'));

	 }

}





if (! function_exists('pre')) {

   function pre($var)

   {
       echo '<pre>';

       print_r($var);

       echo '</pre>';

   }
}
if(! function_exists('encrypt')){

  function encrypt( $string, $action = 'e' ) {

	    $secret_key = 'bB,}RW=[H-TrQ!5j8T\Tc{S&w2#CDF$%^@v';

	    $secret_iv = 'S8~G?F"GAP<dVHhatC>*xy@^]5qT\Tc{S&w2#CDF$%^@v';

	    $output = false;

	    $encrypt_method = "AES-256-CBC";

	    $key = hash( 'md5', $secret_key );

	    $iv = substr( hash( 'md5', $secret_iv ), 0, 16 );

	    if( $action == 'e' ) {

	        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );

	    }
	    else if( $action == 'd' ){

	        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );

	    }

	    return $output;
	}
}

if(! function_exists('get_array')){

    function get_array($array,$key,$default = null){

        return isset($array[$key]) ? $array[$key] : $default;

    }

}

if(! function_exists('response_time')){

	function response_time(){

		return (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT']);

	}

}
if(! function_exists('flash_messages')){

	function flash_messages($name){

		return $_SESSION['flash_messages'] = array();

	}

}

if(! function_exists('GetAuth')){

	function GetAuth($key,$default = null){

			return isset($_SESSION[encrypt($key)]) ? encrypt($_SESSION[encrypt($key)],'d') : $default;

	}

}

if(! function_exists('IsAuth')){

	function IsAuth($key){
			if(isset($_SESSION[encrypt("role")])){
				$role = encrypt($_SESSION[encrypt("role")],'d');

				return ($role === $key? true: false);
			}


	}

}


if(! function_exists('TotalRows')){

	function TotalRows(){

			return encrypt($_SESSION[encrypt('totalRow')],'d');

	}

}



if(! function_exists('safe')){

    function safe($value){

       return htmlspecialchars($value);

    }
}

if(! function_exists('display_error_attack')){

	function display_error_attack($type_attack){

		include("vendor/Dedelang/View/Template/findings.php");

		die();
	}
}

if(! function_exists('get_error')){

	function get_error($field){

		 return Cookie::get($field);
	}
}

if(! function_exists('get_error_status')){

	function get_error_status(){

		 return Cookie::has('error_status');
	}
}

if(! function_exists('get_status')){

	function get_status($value){

		 return Cookie::has($value);
	}
}

if(! function_exists('maxid')){

	function maxid($table,$field){

		 return Query::maxid($table,$field);
	}
}

if(! function_exists('time_elapsed')){

	function time_elapsed($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    echo $string ? implode(', ', $string) . ' ago' : 'just now';
}
}
