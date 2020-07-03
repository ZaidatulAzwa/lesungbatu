<?php

namespace Dedelang\Http;

class Flash{
    protected static $key;

    public static function start(){

        ini_set('session.use_only_cookies',1);

        (! session_id() ? session_start() : '');

    }

    public static function set($key,$value){

        self::$key = $key;

        self::time();

        $_SESSION[encrypt($key)] = encrypt($value);

    }
    public static function time($inactive=5){
      // $inactive = 5;

       // check to see if $_SESSION["timeout"] is set
       if (isset($_SESSION["timeout"])) {
           // calculate the session's "time to live"
               $sessionTTL = time() - $_SESSION["timeout"];
               if ($sessionTTL > $inactive) {
                   self::remove(self::$key);
              }
           }

           $_SESSION["timeout"] = time();
    }

    public static function message($key, $default = null){
        self::$key = $key;
        self::time();
        return encrypt(get_array($_SESSION, encrypt($key), $default),'d');

    }

    public static function get($key, $default = null){
        self::$key = $key;
        self::time();
        return encrypt(get_array($_SESSION, encrypt($key), $default),'d');

    }

    public static function has($key){

        return isset($_SESSION[encrypt($key)]);

    }
    public static function remove($key){

        unset($_SESSION[encrypt($key)]);

    }

    public static function all(){

        return $_SESSION;

    }

    public static function destroy(){

        session_destroy();

    }

}
