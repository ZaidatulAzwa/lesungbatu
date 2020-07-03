<?php

namespace Dedelang\Http;

class Request{

     public static function get($num){


       return (self::hasGet($num)?htmlspecialchars($_GET[$num]):$_GET[$num]=0);


     }

     public static function getAdd($array){

       foreach ($array as $key => $value) {

         $_GET[htmlspecialchars($key)]=htmlspecialchars($value);

       }

     }
     public static function getRemove($array){
       foreach ($array as $key) {
         unset($_GET[$key]);
       }
     }

     public static function hasGet($key){

         return isset($_GET[$key]);

     }


     public static function getAll(){

       return $_GET;

     }

     public static function post($name){

       (getenv('NAME_FIELD_SECURITY')==="ON" ? $name=encrypt($name) : '');

       return htmlspecialchars($_POST[$name]);

     }

     public static function postAll(){

       return $_POST;

     }

     public static function postAdd($array){
       foreach ($array as $key => $value) {
         $_POST[htmlspecialchars($key)]=htmlspecialchars($value);
       }
     }

     public static function postRemove($array){
       foreach ($array as $key) {
         unset($_POST[$key]);
       }
     }

     public static function server($type){

        return htmlspecialchars($_SERVER[$type]);

     }
}
