<?php

namespace Dedelang\Engine\DB;

use PDO;

use PDOException;

class Knex{

	protected static $connection;

	protected static $table;

	protected static $tables=[];

	protected static $query;

	protected static $data = [];

	protected static $bindings = [];

	protected static $lastId;

	protected static $where;

	protected static $union;

	protected static $wheres=[];

	protected static $having;

	protected static $and;

	protected static $or;

	protected static $not;

	protected static $in;

	protected static $notin;

	protected static $select;

	protected static $selects = [];

	protected static $joins = [];

	protected static $join_type;

	protected static $on = [];

	protected static $orderBy;

	protected static $limit;

	protected static $offset;

	protected static $rows = 0;

	protected static $insert;

	protected static $update;

	protected static $delete;

	protected static $values = [];

	protected static $fields = [];

 	protected static function knex(){

        try {

            self::$connection = new PDO('mysql:host='. getenv('DB_HOST') . ';dbname=' .getenv('DB_DATABASE'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'));

						self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

						self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

						self::$connection->exec('SET NAMES utf8');

						self::$connection->beginTransaction();

				} catch (PDOException $e) {

					include("vendor/Dedelang/View/Template/error.php");

					die();

				}

			return new self();

  }
	public static function reset(){

    self::$table = null;

    self::$tables=[];

    self::$query= null;

    self::$data = [];

    self::$bindings = [];

    self::$lastId= null;

    self::$where= null;

    self::$union=null;

    self::$wheres=[];

    self::$having=null;

  	self::$and=null;

    self::$or= null;

    self::$not=null;

    self::$in=null;

    self::$notin=null;

    self::$select= null;

    self::$selects= [];

    self::$joins= [];

    self::$join_type=null;

    self::$on=[];

    self::$orderBy= null;

    self::$limit= null;

    self::$offset= null;

    self::$rows = 0;

  	self::$insert= null;

  	self::$update= null;

  	self::$delete= null;

  	self::$values = [];

		self::$fields = [];
  }


}


 ?>
