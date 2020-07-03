<?php

namespace Controllers;

use Dedelang\View\View;

use Dedelang\Engine\DB\Query;

use Models\usersModel;

class usersController{

	public static function index(){

		View::render('users');

	}

	public static function u1(){

		View::render('users/bahanmasakan');

	}

	public static function u2(){

		View::render('users/jenismasakan');

	}

	public static function u3(){

		View::render('users/kegemaranuser');

	}

	public static function u4(){
			 $dataResult = usersModel::read1();
			 //pre($dataResult);
			 view::render('users/MasakanMelayuTradisi', ['dataResult'=> $dataResult]);
	 }

	public static function u5(){
		$dataResult = usersModel::read2();

		View::render('users/MasakanWestern', ['dataResult'=> $dataResult]);
	}

	public static function u6(){
		$dataResult = usersModel::read3();

		View::render('users/MasakanThai', ['dataResult'=> $dataResult]);
	}

	public static function u7(){
		$dataResult = usersModel::read4();

		View::render('users/MasakanChinese', ['dataResult'=> $dataResult]);
	}

	public static function u8(){
		$dataResult = usersModel::read5();

		View::render('users/MasakanIndian', ['dataResult'=> $dataResult]);
	}

	public static function u9(){
			 $dataResult = usersModel::read();
			 //pre($dataResult);
			 view::render('users/resepiuser', ['dataResult'=> $dataResult]);
	 }

	 public static function u10(){

	 $dataResult = usersModel::getoneRow();
		view::render('users/kegemaranusers',['singleRow'=>$dataResult]);

	}

}
?>
