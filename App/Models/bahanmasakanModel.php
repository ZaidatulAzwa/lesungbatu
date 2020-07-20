<?php

namespace Models;

use Dedelang\Engine\DB\Query;

use Dedelang\Http\Request;

use Dedelang\Engine\Validate;


class bahanmasakanModel{

	public static function read(){

      $result = Query::table('bahanmasakan')
              ->select('*')
              ->getAll();

      return $result;
  }

	public static function getOneRow(){
		$recipe_title = Request::get('p1');
		$result = Query::table('bahanmasakan')
						->select('*')
						->where('recipe_title','=',$recipe_title)
						->getOne();

		 return $result;
	}

  public static function insert(){

		//your query here

	}

  public static function update(){

		//your query here

	}

  public static function delete(){

		//your query here

	}

}
?>
