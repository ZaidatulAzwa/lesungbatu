<?php

namespace Controllers;

use Dedelang\View\View;

class forwardchainingController{

	public static function index(){

		View::render('bahanmasakan/bahan-masakan');
	}

	public static function bahan(){

		View::render('bahanmasakan/list-recipes');
	}
}
?>
