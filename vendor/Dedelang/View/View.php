<?php
namespace Dedelang\View;

class View{

protected static $path;

protected static $contents = "[->] use Dedelang\View\Html [<-]";

protected static $syntax = [
							'<#feach'=>'<?php foreach',
							'<# feach'=>'<?php foreach',
							'\)#>'=>'): ?>',
							'\) #>'=>'): ?>',
							'\[@'=>'<?php ',
							'@]'=>'; ?>',
							'<# nfeach #>'=>'<?php endforeach; ?>',
							'<#nfeach#>'=>'<?php endforeach; ?>',
							'\[>>'=>'<?php echo safe(',
							'\[>> '=>'<?php echo safe(',
							'\[>extend'=>'<?php extend',
							'\)<]'=>'); ?>',
							'<<]'=>'); ?>',
							' <<]'=>'); ?>',
							'\[>'=>'echo ',
							' <]'=>';',
							'\[->] '=>'<?php ',
							'\[->]'=>'<?php ',
							' \[<-]'=>'; ?>',
							'@if'=>'<?php if',
							'@lif'=>'<?php elseif',
							'@ls::'=>'<?php else: ?>',
							'\)::'=>'): ?>',
							' <:]'=>': ?>',
							'<:]'=>': ?>',
							'{@extend'=>'<?php extend',
							'@}'=>'; ?>',
							'{{'=>'<?php echo safe(',
							'}}'=>'); ?>',
							'@endif'=>'<?php endif; ?>'];


private static function set_contents(){

	self::$contents = file_get_contents(self::$path);

}
public static function render($page, $data = []){

	self::set_path($page);

	self::exist($page);

	(!empty($data) ? extract($data) : '');

	self::get_contents();

	foreach (self::$syntax as $key => $value) {

		self::replace($key,$value);

	}

	try {

		eval('?>'.self::$contents.'');

		die();

	} catch (\ERROR $th) {

		$msg ="<b>(Error message : ".$page.".php)</b><br>";

		$msg .= " syntax error, unexpected syntax in line ". strval($th->getLine());

		self::error_msg($msg);

	}

}

private static function get_contents(){

	self::$contents .= "[->] use Dedelang\Http\Flash [<-]";

	self::$contents .= file_get_contents(self::$path);

}


private static function replace($match,$value){

	self::$contents = preg_replace("/$match/", $value,self::$contents);

}

public static function set_path($page){

	self::$path = "App/Views/".$page .".dagger.php";

}


public static function exist($page){

	if(!file_exists(self::$path)){

		include("vendor/Dedelang/View/Template/view_not_found.php");

		die();

	}

}

public static function header($page){

	self::render($page);

}

public static function body($page, $data = []){

	self::render($page, $data);

}

public static function footer($page){

	self::render($page);

}

public static function error_msg($e){

	include("vendor/Dedelang/View/Template/error.php");

	die();
}


}



 ?>
