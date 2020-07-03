<?php
namespace Dedelang\Engine;

class Route{

protected static $url;

protected static $roads = [];

protected static $routes = [];

protected static $method="GET";

protected static $type="html";

protected static $class="controller";

protected static $session_level;

protected static $session_value;

protected static $error_url;

public function __construct(){

}

public static function set($road,$action){

    self::set_road($road,$action);

}
public static function set_road($road,$action){
  $route = [
      'url'             =>strtolower(self::proper_road($road)),
      'action'          =>$action,
      'method'          =>self::$method,
      'session_level'   =>self::$session_level,
      'type'            =>self::$type,
      'class'           =>self::$class,
      // 'session_value'   =>self::$session_value,
      'error_url'       =>self::$error_url,
  ];
   self::reset();

   return self::$routes[] = $route;

}

public static function set_road_model($road,$action){
  self::$type='api';
  self::$class='model';
  self::set_road($road,$action);

}

private static function reset(){

  self::$method="GET";

  self::$session_level='';

  self::$session_value='';

}
public static function routes(){

  return self::$routes;

}


private static function proper_road($road){
  if(strstr($road, '/@', true)){

     $road = strstr($road, '/@', true);

  }

  return (self::$type==='api'? 'api/'.$road:$road);

}

public static function authorization($level, $error_url=null){

  self::$session_level = $level; 

  self::$error_url="/".$error_url;

  return new self();

}

public static function method($method){

  self::$method = $method;

  return new self();

}



}
