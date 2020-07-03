<?php

namespace Models;

use Dedelang\Engine\DB\Query;

use Dedelang\Http\Request;

use Dedelang\Engine\Validate;


class jenismasakanModel{

	public static function read(){

      $result = Query::table('melayu')
              ->select('*')
              ->getAll();

      return $result;

  }

	public static function read1(){

      $result = Query::table('western')
              ->select('*')
              ->getAll();

      return $result;
  }

	public static function read2(){

      $result = Query::table('thai')
              ->select('*')
              ->getAll();

      return $result;
  }

	public static function read3(){

      $result = Query::table('cina')
              ->select('*')
              ->getAll();

      return $result;
  }

	public static function read4(){

      $result = Query::table('india')
              ->select('*')
              ->getAll();

      return $result;
  }

  public static function getAll(){

		//your query here

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
