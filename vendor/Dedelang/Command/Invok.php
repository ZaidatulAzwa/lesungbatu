<?php

class Invok{
  protected static $folder = [];
  protected static $file = [];
  protected static $contents;
   public static function start(){
     self::init_data();
     foreach (self::$folder as $value) {
        self::folder($value);
     }
     foreach (self::$file as $key => $value) {
       self::copy($key,$value);
     }

    echo "\e[42msuccess\e[0m created all initiate file\n";
    echo "Run server using this command 'php -S localhost:8080'\n";
   }

   public static function folder($folder){

      (!is_dir($folder)? mkdir($folder, 0755, true): '');

   }

   public static function copy($source,$destination){

     return (copy(__DIR__ . $source,__DIR__ . $destination)? true:false);

   }

   public static function module($module){
      $Controller = "App/Controllers/".$module."Controller.php";
      $Model = "App/Models/".$module."Model.php";
      $View = "App/Views/".$module.".dagger.php";

      self::$contents = file_get_contents(__DIR__ ."/InitFile/WelcomeController.php");
      self::replace('Welcome',$module);
      file_put_contents($Controller, self::$contents, LOCK_EX);

      self::$contents = file_get_contents(__DIR__ ."/InitFile/ViewPage.php");
      self::replace('Welcome',$module);
      file_put_contents($View, self::$contents, LOCK_EX);

      self::$contents = file_get_contents(__DIR__ ."/InitFile/ModelPage.php");

      self::replace('Welcome',$module);
      file_put_contents($Model, self::$contents, LOCK_EX);

      echo "\e[42msuccess\e[0m created module $module\n\n";
      echo "Add code below at file web.php\n";
      echo "Route::set('".strtolower($module)."','$module@index');\n";

   }

   private static function AuthModule($module){
      $Controller = "App/Controllers/".$module."Controller.php";
      $Model = "App/Models/".$module."Model.php";
      $View = "App/Views/".$module.".dagger.php";

      self::$contents = file_get_contents(__DIR__ ."/InitFile/WelcomeController.php");
      self::replace('Welcome',$module);
      file_put_contents($Controller, self::$contents, LOCK_EX);

      self::$contents = file_get_contents(__DIR__ ."/InitFile/ViewPage.php");
      self::replace('Welcome',$module);
      file_put_contents($View, self::$contents, LOCK_EX);

      self::$contents = file_get_contents(__DIR__ ."/InitFile/ModelPage.php");

      self::replace('Welcome',$module);
      file_put_contents($Model, self::$contents, LOCK_EX);

   }

   private static function init_data(){
    self::$folder = ['App/Controllers','App/Models','App/Path',
                      'App/Views','App/Views/Waf','App/Views/login','public/css','public/images',
                      'App/Views/error','public/js','assets'];
    self::$file = ["/InitFile/Welcome.dagger.php"=>"../../../../App/Views/Welcome.dagger.php",
                   "/InitFile/WelcomeController.php"=>"__DIR__ . '../../../../App/Controllers/WelcomeController.php",
                   "/InitFile/web.php"=>"../../../../App/Path/web.php",
                   "/InitFile/api.php"=>"../../../../App/Path/api.php",
                   "/InitFile/.htaccess"=>"../../../../public/.htaccess",
                   "/InitFile/login/.htaccess"=>"../../../../assets/.htaccess",
                   "/InitFile/Firewall.php"=>"../../../../App/Views/Waf/Firewall.php",
                   "/InitFile/Error/404.php"=>"../../../../App/Views/error/404.php"];

   }

   private static function replace($match,$value){

   	self::$contents = preg_replace("/$match/", $value,self::$contents);

   }

   public static function createdTable(){

     self::copy("/InitFile/login/Login.dagger.php","../../../../App/Views/login/Login.dagger.php");
     self::copy("/InitFile/login/Register.dagger.php","../../../../App/Views/login/Register.dagger.php");
     self::copy("/InitFile/login/UpdatePassword.dagger.php","../../../../App/Views/login/UpdatePassword.dagger.php");
     self::copy("/InitFile/login/LoginController.php","../../../../App/Controllers/LoginController.php");
     self::AuthModule("Users");
      $db_type = getenv('DB_CONNECTION');
      // $table = getenv('DB_PREFIX')."users";
      $table = "users";
      $host = getenv('DB_HOST');
      $database = getenv('DB_DATABASE');
      $username = getenv('DB_USERNAME');
      $pass = getenv('DB_PASSWORD');
      try {
           $db = new PDO("$db_type:dbname=$database;host=$host",$username,$pass);
           $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );//Error Handling
           $sql ="CREATE table $table(
           user_id INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
           user_firstname VARCHAR( 50 ),
           user_lastname VARCHAR( 250 ),
           user_username VARCHAR( 150 ) NOT NULL UNIQUE,
           user_email VARCHAR( 150 ) NOT NULL UNIQUE,
           user_password VARCHAR( 150 ) NOT NULL,
           user_salt VARCHAR( 100 ) NOT NULL,
           user_role VARCHAR( 50 ) NOT NULL,
           user_api_token VARCHAR( 250 ),
           created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
           updated_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP);";
           $db->exec($sql);
           echo "\e[42msuccess\e[0m created authentication process\n\n";
           echo "Add code below at file web.php\n";
           echo "Route::set('login','Login@index');\n";
           echo "Route::set('logout','Login@Logout');\n";
           echo "Route::set('register','Login@register');\n";
           echo "Route::authorization(['users'],'login')->set('update-password','Login@updatePassword');\n";
           echo "Route::authorization(['users'],'login')->set('home','Users@index');\n";

      } catch(PDOException $e) {
          echo "Table '$table' already exists";
      }
   }
}




 ?>
