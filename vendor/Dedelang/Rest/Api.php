<?php
namespace Dedelang\Rest;

use Dedelang\Engine\Route;



class Api extends Route{


  public static function setModel($route, $action){

    Route::set_road_model($route, $action);

  }

  public static function set($route, $action){

    Route::set_road_model($route, $action);

  }










}


 ?>
