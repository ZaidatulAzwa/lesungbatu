<?php

session_start();

use Dedelang\Engine\Loader;

use Dedelang\Engine\Application as App;

use Dedelang\Engine\DotEnv\DotEnv;

use Dedelang\Engine\Security\Attack;

set_error_handler('exceptions_error_handler');

function exceptions_error_handler($severity, $message, $filename, $lineno) {
  if (error_reporting() == 0) {
    return;
  }
  if (error_reporting() & $severity) {
    throw new ErrorException($message, 0, $severity, $filename, $lineno);
		include("vendor/Dedelang/View/Template/error.php");
		die();
  }
}

try {

DotEnv::Load('vendor/.env');

Loader::Folder('vendor/Dedelang/Helpers')->File('/Helper')->Load();

Attack::run();

Loader::Folder('App/Path')->File('/web')->Load();

Loader::Folder('App/Path')->File('/api')->Load();

App::run();

} catch (Error $e) {
	include("vendor/Dedelang/View/Template/error.php");

}catch (ErrorException $e) {
	include("vendor/Dedelang/View/Template/error.php");
}
