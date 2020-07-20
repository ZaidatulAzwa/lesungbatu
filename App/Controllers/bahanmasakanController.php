<?php

namespace Controllers;

use Dedelang\View\View;

use Models\bahanmasakanModel;

class bahanmasakanController{

	public static function index(){

		View::render('bahanmasakan/bahan-masakan');
	}

	public static function bahan(){
		$dataResult = bahanmasakanModel::read();

		View::render('bahanmasakan/resepi', ['dataResult'=> $dataResult]);
	}

	public static function resepi(){
				 $dataResult = bahanmasakanModel::getoneRow();

					view::render('bahanmasakan/resepi',['singleRow'=>$dataResult]);

	}

}
?>
