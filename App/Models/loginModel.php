<?php

namespace Models;

use Dedelang\Engine\DB\Query;

use Dedelang\Http\Request;

use Dedelang\Engine\Validate;

class loginModel{

  public static function getAll(){

      $result = Query::table('users')
              ->select('*')
              ->getAll();

      return $result;
  }

  public static function get(){

     $user_id = Request::get('p1');
     $result = Query::table('users')
             ->select('*')
             ->where('user_id','=',$user_id)
             ->getOne();

      return $result;
 }

  public static function update(){
      $id = Request::get('p1');
      $username = Request::post('name');
      $email = Request::post('email');
      $user_password = Request::post('new_password');
      $result = Query::table('users')
              ->update('user_username', 'user_password', 'user_email')
              ->values($username, $user_password, $email)
              ->where('user_id','=',$id)
              ->run();

      return $result;
  }

  public static function delete(){
      $username = Request::get('p1');
      $result = Query::delete('users')
              ->where('user_username','=',$username)
              ->run();

      return $result;
  }

   public static function getOneRow(){
      $user_id = Request::get('p1');
      $result = Query::table('users')
              ->select('*')
              ->where('user_id','=',$user_id)
              ->getOne();

       return $result;
  }

  public static function insert(){

 	 //your query here

  }

 }
 ?>
