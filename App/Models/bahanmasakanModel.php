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
		 $result = Query::table('bahanmasakan')
						 ->select('*')
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
