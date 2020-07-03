<?php

namespace Dedelang\Engine;

use Dedelang\Http\Request as req;

class Controller {

    protected static $params = [];

    protected static $controller;

    protected static $method;

    private static function set_action($action){

      if(strpos($action, '@')){

        list($controller, $method)  =  explode('@', $action);

        self::set($controller,$method);

      }else{

        self::set($action,'index');

      }


    }

    private static function set($controller,$method){

      self::$controller = $controller;

      self::$method = $method;
    }

    private static function proper_controller($controller){

        $controller .='Controller';

        return $controller = $controller;
    }

    private static function proper_model($controller){

        $controller .='Model';

        return $controller = $controller;
    }

    public static function load($action, $class){

      ($class ==='controller'? self::load_controller($action):self::load_model($action));

    }

    private static function load_model($action){

      self::set_action($action);

      $controllerName = self::proper_model(self::$controller);

      require_once str_replace('\\', '/','App/Models/' . $controllerName . '.php');

      call_user_func_array(['\\Models\\'.str_replace('/', '\\', $controllerName), self::$method], self::$params);


    }

    private static function load_controller($action){

      self::set_action($action);

      $controllerName = self::proper_controller(self::$controller);

      require_once str_replace('\\', '/','App/Controllers/' . $controllerName . '.php');

      call_user_func_array(['\\Controllers\\'.str_replace('/', '\\', $controllerName), self::$method], self::$params);


    }



}
