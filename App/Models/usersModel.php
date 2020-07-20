<?php

namespace Models;

use Dedelang\Engine\DB\Query;

use Dedelang\Http\Request;

use Dedelang\Engine\Validate;

class usersModel{

   public static function read(){

        $result = Query::table('bahanmasakan')
                ->select('*')
                ->getAll();

        return $result;
    }

    public static function read1(){

        $result = Query::table('melayu')
                ->select('*')
                ->getAll();

        return $result;

    }

    public static function read2(){

        $result = Query::table('western')
                ->select('*')
                ->getAll();

        return $result;
    }

    public static function read3(){

        $result = Query::table('thai')
                ->select('*')
                ->getAll();

        return $result;
    }

    public static function read4(){

        $result = Query::table('cina')
                ->select('*')
                ->getAll();

        return $result;
    }

    public static function read5(){

        $result = Query::table('india')
                ->select('*')
                ->getAll();

        return $result;
    }

    public static function get(){

       $recipe_id = Request::get('p1');
       $result = Query::table('bahanmasakan')
               ->select('*')
               ->where('recipe_id','=',$recipe_id)
               ->getOne();

        return $result;
   }

   public static function get1(){

      $recipe_id = Request::get('p1');
      $result1 = Query::table('melayu')
              ->select('*')
              ->where('recipe_id','=',$recipe_id)
              ->getOne();

       return $result1;
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
