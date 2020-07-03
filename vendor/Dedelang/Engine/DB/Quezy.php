<?php

namespace Dedelang\Engine\DB;

use Dedelang\Engine\DB\Knex;

use Dedelang\Http\Url as url;

use Dedelang\Engine\Validate;

use PDO;



use PDOException;

class Quezy extends Knex{

  public static function table($table){

		self::$table = $table;

		return new self();

	}

	public static function select($data){
    
		(is_array($data)?self::$select = 'SELECT '.implode(', ', $data):self::$select = 'SELECT '.implode(', ', func_get_args()));


		return new self();

	}

  public static function multiple($datas){
    self::knex();

    $stmt = self::$connection->prepare(self::$insert);
    foreach ($datas as $data) {
      $stmt->execute($data);
    }
    self::$connection->commit(); //**** ADD THIS

  }

	public static function insert(){
		$fields = (self::$fields? self::$fields : func_get_args());

		$sql ="INSERT INTO ".self::$table;

		$sql .=' ('.implode(', ', $fields).') ';

		$num = count($fields);

		$sql .='VALUES ('.substr(str_repeat("?,", $num),0,-1).')';

		self::$insert = $sql;

		return new self();

	}

	public static function update(){
    $fields = (self::$fields? self::$fields : func_get_args());
		$sql = "UPDATE ".self::$table." SET ";

		$sql .=implode('=?, ', $fields).'=?';

		self::$update = $sql;

		return new self();

	}

  public static function join($table,$join_type=''){

    self::$joins[] = $table;

    self::$join_type = $join_type;

    return new self();

  }

  public static function on($value1,$condition,$value2){

    self::$on[] = $value1.$condition.$value2;

    return new self();

  }

	public static function delete($table){

		$sql = "DELETE FROM ".$table;

		self::$delete = $sql;

		return new self();

	}

	public static function values(){

		self::$values = (self::$values? self::$values : func_get_args());

		return new self();

	}



	public static function getOne(){

      try {
        self::knex();

				(self::$union ? $sql = self::$union :((self::$query ? $sql = self::$query : $sql = self::statement())));

        $query = self::$connection->prepare($sql);

				self::$values = (self::$values? self::$values : func_get_args());

        $query->execute(self::$values);

        self::$connection->commit();

        $result = $query->fetch();

        self::$rows = $query->rowCount();

        $_SESSION[encrypt('totalRow')] = encrypt(self::$rows);

				self::reset();

        return $result;

      } catch (\Exception $e) {

        ($e->getCode()==="23000"?Validate::setDuplicateMsg('Duplicated Data'):self::error_result('error',$e));

        return false;

      }



	}

  public static function getAll(){

    try {
      self::knex();

      (self::$union ? $sql = self::$union :((self::$query ? $sql = self::$query : $sql = self::statement())));

    	$query = self::$connection->prepare($sql);

      $query->execute(self::$values);

      self::$connection->commit();

    	$result = $query->fetchAll();

      self::$rows = $query->rowCount();

      $_SESSION[encrypt('totalRow')] = encrypt(self::$rows);

			self::reset();

      return $result;

    } catch (\Exception $e) {

      ($e->getCode()==="23000"?Validate::setDuplicateMsg('Duplicated Data'):self::error_result('error',$e));

      return false;

    }


  }

  public static function run(){

		self::knex();

		$query='';

		if(self::$insert){

			$query = self::$insert;

		}elseif(self::$update){

			$query = self::$update;

			$query .=self::$where;

		}elseif(self::$delete){

			$query = self::$delete;

			$query .=self::$where;

		}

    try {


      $query = self::$connection->prepare($query);

      $query->execute(self::$values);

      self::$connection->commit();

      self::$rows = $query->rowCount();

      self::reset();

  		return true;

    } catch (\Exception $e) {

      ($e->getCode()==="23000" ? Validate::setDuplicateMsg('Duplicated Data'):self::error_result('error',$e));

      return false;

    }

	}

public static function checkDuplicate(){

    try {
      self::knex();

      $bindings = func_get_args();

      self::$where = ' WHERE '.$bindings[0].$bindings[1].'?';

      self::$select = "SELECT * ";

      $sql = self::statement();

      $query = self::$connection->prepare($sql);

  		$query->execute([$bindings[2]]);

      self::$connection->commit();

  		$result = $query->fetch();

      echo self::$rows = $query->rowCount();

      // (self::rows()>1 ? self::error_result('duplicate',$e) : '');

      self::reset();

      return new self();

    } catch (\Exception $e) {

      ($e->getCode()==="23000"?Validate::setDuplicateMsg('Duplicated Data'):self::error_result('error',$e));

      return false;

    }


  }

  public static function where(){

		$bindings = func_get_args();

		self::$where = ' WHERE '.$bindings[0].' '.$bindings[1].' '.'?';

    self::$values[] = $bindings[2];

		return new self();

	}

  public static function wheres(){

		$bindings = func_get_args();

    foreach ($bindings as $value) {

      self::$wheres[] = explode(",",$value);

    }

    $x=0;

    $sql='';

    $t_union = count(self::$tables)-1;

    foreach (self::$selects as $key => $value) {


       $sql .= " SELECT ".$value." FROM ".self::$tables[$x];

       $sql .=" WHERE ".self::$wheres[$x][0].self::$wheres[$x][1]."?";

       $sql .=" UNION ".self::$tables[$t_union];

       self::$values[]=self::$wheres[$x][2];

       $x++;

    }

    (self::$tables[$t_union]=='' ? $sql = mb_substr($sql, 0, -6) : $sql = mb_substr($sql, 0, -10));

    self::$union = $sql;

		return new self();

	}
  public static function query($query){

    self::$query = $query;

    return new self();
  }

  public static function selects(){

    self::$selects = func_get_args();

    return new self();
  }

  public static function union(){

    self::$tables = func_get_args();

    (count(func_get_args())<3 ? self::$tables[2] ='' : '');

    return new self();
  }

  public static function having(){

    $bindings = func_get_args();

		self::$where = ' HAVING '.$bindings[0].' '.$bindings[1].' '.'?';

    self::$values[] = $bindings[2];

		return new self();

  }

  public static function in(){

    $bindings = func_get_args();

    $value = str_replace(",","','",$bindings[1]);

    self::$in = " WHERE ".$bindings[0]." IN ('".$value."')";

    return new self();
  }

  public function notin(){

    $bindings = func_get_args();

    $value = str_replace(",","','",$bindings[1]);

    self::$notin = " WHERE ".$bindings[0]." NOT IN ('".$value."')";

    return new self();

  }
	public static function and(){

		$bindings = func_get_args();

		self::$and = ' AND '.$bindings[0].$bindings[1].'?';

    self::$values[] = $bindings[2];

		return new self();

	}

  public static function or(){

		$bindings = func_get_args();

		self::$or = ' OR '.$bindings[0].$bindings[1].'?';

    self::$values[] = $bindings[2];

		return new self();

	}

  public static function not(){

		$bindings = func_get_args();

		self::$not = ' NOT '.$bindings[0].$bindings[1].'?';

    self::$values[] = $bindings[2];

		return new self();

	}

  public static function rows(){

    return self::$rows;

  }
  public static function limit($limit){

		self::$limit = ' LIMIT '.$limit;

		return new self();

	}

  public static function offset($offset){

    self::$offset = ' OFFSET '.$offset;

    return new self();

  }

  public static function orderBy($orderBy, $condition = "ASC"){

    self::$orderBy = ' ORDER BY '.$orderBy;

    return new self();

  }

	public static function execute($sql){
    try {
      self::knex();

  		$query = self::$connection->prepare($sql);

      $query->execute(self::$values);

      self::$connection->commit();
      // (Cookie::has("errorValidation") !== true ? $query->execute(self::$values): '');

      self::reset();

  		return true;

    } catch (\Exception $e) {

      ($e->getCode()==="23000"?Validate::setDuplicateMsg('Duplicated Data'):self::error_result('error',$e));

      return false;

    }

	}

  public static function display(){

    echo self::statement();

  }

	private static function statement(){

		$sql ='';

		(self::$select ? $sql .=self::$select:'');

		(self::$table ? $sql .=' FROM '.self::$table:'');

		(self::$joins ? $sql .=self::statement_join():'');

		(self::$where ? $sql .=self::$where:'');

		(self::$having ? $sql .=self::$having:'');

		(self::$in ? $sql .=self::$in:'');

		(self::$notin ? $sql .=self::$notin:'');

		(self::$and ? $sql .=self::$and:'');

		(self::$or ? $sql .=self::$or:'');

		(self::$not ? $sql .=self::$not:'');

		(self::$orderBy ? $sql .=self::$orderBy:'');

		(self::$limit ? $sql .=self::$limit:'');

		(self::$offset ? $sql .=self::$offset:'');

		return $sql;

	}

  private static function statement_join(){

    $x=0;

    $sql='';

    foreach (self::$joins as $value) {

      $sql .= ' '.self::$join_type.' JOIN '.$value.' ';

      $sql .= ' ON ('.self::$on[$x].')';

      $x++;

    }

    return $sql;

  }

  private static function error_result($file,$e){

      include("vendor/Dedelang/View/Template/error.php");

      die();
  }



}
