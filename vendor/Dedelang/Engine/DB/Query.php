<?php

namespace Dedelang\Engine\DB;

use Dedelang\Engine\DB\Quezy;

class Query extends Quezy{

	protected static $tableChanges="";

	public static function post(){

	  foreach($_POST as $key => $val) {

	    ($key!="csrf" ? array_push(self::$values,htmlspecialchars($val)) : '');

	    ($key!="csrf" ? array_push(self::$fields,htmlspecialchars($key)) : '');

	  }
	  return new self();
	}

	public static function save($table){

		self::post();

		return Quezy::table($table)
					->insert()
					->values()
					->run();

		return new self();

	}
	public static function condition($fieldLazy,$conditionLazy,$valueLazy){

		self::post();

		Quezy::table(self::$tableChanges)
					->update()
					->values()
					->where($fieldLazy,$conditionLazy,$valueLazy)
					->run();
		return new self();
	}

	public static function changes($tableChanges){

		self::$tableChanges = $tableChanges;

		return new self();

	}
	public static function checkDuplicate(){

	}

	public static function maxid($table,$field){
		$data = Query::table($table)
							 ->select('MAX('.$field.') as max_id')
							 ->getOne();

		return $data->max_id;
	}


}
 ?>
