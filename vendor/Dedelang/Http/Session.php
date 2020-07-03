<?php

namespace Dedelang\Http;

class Session{


    public static function start(){

        ini_set('session.use_only_cookies',1);

        (! session_id() ? session_start() : '');

    }

    public static function set($key,$value){

        $_SESSION[encrypt($key)] = encrypt($value);

    }

    public static function get($key, $default = null){

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
