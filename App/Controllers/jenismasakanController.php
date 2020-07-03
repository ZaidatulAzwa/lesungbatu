<?php

namespace Controllers;

use Dedelang\View\View;

use Models\jenismasakanModel;

class jenismasakanController{

	public static function index(){

		View::render('jenismasakan/jenis-masakan');
	}

	public static function melayu(){
			 $dataResult = jenismasakanModel::read();
			 //pre($dataResult);
			 view::render('jenismasakan/Masakan-Melayu-Tradisi', ['dataResult'=> $dataResult]);
	 }

	public static function western(){
		$dataResult = jenismasakanModel::read1();

		View::render('jenismasakan/Masakan-Western', ['dataResult'=> $dataResult]);
	}

	public static function thai(){
		$dataResult = jenismasakanModel::read2();

		View::render('jenismasakan/Masakan-Thai', ['dataResult'=> $dataResult]);
	}

	public static function chinese(){
		$dataResult = jenismasakanModel::read3();

		View::render('jenismasakan/Masakan-Chinese', ['dataResult'=> $dataResult]);
	}

	public static function indian(){
		$dataResult = jenismasakanModel::read4();

		View::render('jenismasakan/Masakan-Indian', ['dataResult'=> $dataResult]);
	}

}
?>
