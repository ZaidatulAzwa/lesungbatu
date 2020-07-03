<?php

namespace Models;

use Dedelang\Engine\DB\Query;

use Dedelang\Http\Request;

use Dedelang\Engine\Validate;


class favModel{

	public static function insert(){
			//echo Request::post('name');
			$details = Request::post('details');
			$result = Query::table('fav')
								 ->insert('fav_details')
								 ->values($details)
								 ->run();

					return $result;
			//echo "process Model";
	}

	public static function read(){

			$result = Query::table('fav')
							->select('*')
							->getAll();

			return $result;
	}

	public static function updated(){
			$id = Request::get('p1');
			$detailsfav = Request::post('details');
			$result = Query::table('fav')
							->update('fav_details')
							->values($detailsfav)
							->where('fav_id','=',$id)
							->run();

			return $result;
	}

	public static function delete(){
			$id = Request::get('p1');
			$result = Query::delete('fav')
							->where('fav_id','=',$id)
							->run();

			return $result;
	}

	 public static function getOneRow(){
			$id = Request::get('p1');
			$result = Query::table('fav')
							->select('*')
							->where('fav_id','=',$id)
							->getOne();

			 return $result;
	}

}
?>
