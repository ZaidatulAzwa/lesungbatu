<?php

namespace Controllers;

use Dedelang\View\View;

use Models\favModel;

class favController{

	public static function index(){

		View::render('fav');

	}

	public static function created(){

            if (http_method()==="POST"):

               $dataResult = favModel::insert();

                self::listed();

            else:
                //echo "request GET Method";
                view::render('fav/add');
            endif;
            //$dataResult = CoursesModels::insert();
            //pre($dataResult);
            //coursesModels::insert();
		//View::render('course/add');

	}

       public static function listed(){
            $dataResult = favModel::read();
            //pre($dataResult);
            view::render('fav/list', ['dataResult'=> $dataResult]);
        }

        public static function update(){
            if (http_method()==="POST"):

               $dataResult = favModel::updated();

                self::listed();

            else:
               $dataResult = favModel::getoneRow();
                view::render('fav/update',['singleRow'=>$dataResult]);
            endif;
            //echo "update";
            //$dataResult = CoursesModels::update();
            //pre($dataResult);
        }

        public static function remove(){
            $dataResult = favModel::delete();
            pre($dataResult);
        }




}
?>
