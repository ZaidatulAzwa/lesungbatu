<?php

namespace Controllers;

use Dedelang\View\View;

use Models\WelcomeModel;

class WelcomeController{

	public static function index(){

		View::render('Welcome');

	}

}
?>
