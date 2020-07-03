<?php
namespace Dedelang\Engine;

use Dedelang\Http\Cookie;

use Dedelang\Http\Session;

use Dedelang\Http\Url;

class Validate{

	protected static $field;

	protected static $value;

	protected static $file;

	protected static $file_value;

	protected static $file_type;

	protected static $file_ext;

	protected static $error = false;

	protected static $ext = [];

	protected static $lib_file_ext = ['jpeg'=>'image/jpeg',
																		'png'=>'image/png',
																		'jpg'=>'image/jpeg',
																		'gif'=>'image/gif',
																		'pdf'=>'application/pdf',
																		'docx'=>'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
																		'pptx'=>'application/vnd.openxmlformats-officedocument.presentationml.presentation',
																		'ppt'=>'application/vnd.ms-powerpoint',
																		'doc'=>'application/msword'];

	public static function field($field){

		if(getenv('NAME_FIELD_SECURITY')==="ON"){

			$field=encrypt($field);

			self::$field = $field;

		}else{

			self::$field = $field;

		}

		self::$value = $_POST[self::$field];

		return new self();

	}

	public static function files($file){

		if(getenv('NAME_FIELD_SECURITY')==="ON"){

			$file=encrypt($file);

			self::$file = $file;

		}else{

			self::$file = $file;

		}

		 self::$file_value = $_FILES[self::$file]['tmp_name'];

		 self::$value = $_FILES[self::$file]['tmp_name'];

		 self::$file_type = $_FILES[self::$file]['type'];

		return new self();

	}


	public static function extension(){

		self::$file_ext = func_get_args();

		foreach (self::$lib_file_ext as $key => $value) {

			(in_array($key,self::$file_ext) ? self::$ext[$key] = $value:'');

		}

		self::check_ext();

		return new self();

	}

	private static function check_ext(){
		if(!empty(self::$file_value)){
			(in_array(self::$file_type,self::$ext)? self::$file_type:self::setCookiefile("required only file extension ".implode(', ', self::$file_ext)));
		}

	}
	public static function link($msg="value must be valid url"){

		(!filter_var(self::$value, FILTER_VALIDATE_URL) ? self::setCookie($msg) : self::set_cookie_value());

		return new self();
	}


	public static function required($msg="required text field"){

		(empty(self::$value) ? self::setCookie($msg) : self::set_cookie_value());

		return new self();

	}

	public static function required_file($msg="required file field"){

		(empty(self::$file_value)? self::setCookiefile($msg) : '');

		return new self();

	}

	public static function email($msg="value must be email"){

		(!filter_var(self::$value, FILTER_VALIDATE_EMAIL) ? self::setCookie($msg) : self::set_cookie_value());

		return new self();

	}

	public static function max($num,$msg="invalid string length2"){

		(strlen(self::$value)>$num ? self::setCookie($msg) : self::set_cookie_value());

		return new self();

	}
	public static function min($num,$msg="invalid string length"){

		(strlen(self::$value)<$num ? self::setCookie($msg) : self::set_cookie_value());

		return new self();

	}

	public static function number($msg="value must be number"){

		(!ctype_digit(self::$value) ? self::setCookie($msg) : self::set_cookie_value());

		return new self();

	}

	public static function string($msg="value must be string"){


		(!ctype_alpha (str_replace(' ', '', self::$value)) ? self::setCookie($msg) : self::set_cookie_value());

		return new self();

	}

	public static function float($msg="value must be float"){

	 (! (float) filter_var( self::$value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ) ? self::setCookie($msg) : self::set_cookie_value());

		return new self();

	}

	public static function redirect($path='/'){

		(self::$error ? Url::redirect($path) : '');



	}

	public static function setCookie($msg){

		self::$error = true;

		Cookie::set(self::$field,$msg);

		Cookie::set(self::$field.'_value',self::$value);


	}

	private static function set_cookie_value(){

		Cookie::set(self::$field.'_value',self::$value);

	}

	public static function setCookiefile($msg){

		self::$error = true;

		Cookie::set(self::$file,$msg);

		Cookie::set(self::$file.'_value',self::$file_value);


	}

	public static function msg($field){

		return Cookie::get($field);

	}

	public static function value($field){

		return Cookie::get($field.'_value');

	}

	public static function setReturnErrorValue(){
		unset($_POST['csrf']);
		foreach ($_POST as $key => $value) {
			Cookie::set($key."_value",$value);
		}

	}

	public static function setDuplicateMsg($msg){
		unset($_POST['csrf']);

		foreach ($_POST as $key => $value) {

			Cookie::set($key."_value",$value);

		}

		Cookie::set("Error_Message",$msg);

		url::redirect("/".$_GET['url']);

	}


}


 ?>
