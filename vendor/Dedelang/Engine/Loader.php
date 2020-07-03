<?php

namespace Dedelang\Engine;

class Loader{

	protected static $folder;

	protected static $file;

	protected static $url;

	public static function Folder($folder){

		self::$folder = $folder;

		return new self();
	}


	public static function File($file){

		self::$file = $file. '.php';

		return new self();
	}

	public static function Load(){

		self::generateUrl();

		require_once self::$url;

		self::reset();
	}

	public static function generateUrl(){

		(isset(self::$folder) ? self::$url .=self::$folder : '');

		(isset(self::$file) ? self::$url .=self::$file : '');
	}

	public static function reset(){

        self::$folder = '';

        self::$file = '';

        self::$url = '';

		return new self();
    }


}


 ?>
