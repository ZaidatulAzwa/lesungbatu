<?php
namespace Dedelang\View;

use Dedelang\Engine\Session;

class Html{

	public static function field($type,$name,$class,$value=null){

		(getenv('NAME_FIELD_SECURITY')==="ON" ? $name=encrypt($name) : '');

		self::field_render($type,$name,$class,$value);

		return new self();

	}
	public static function form($name,$action,$method,$file){

		$action=	base_url($action);

		echo ($file ? "<form name='$name' action='$action' method='$method' enctype='multipart/form-data'>" : "<form name='$name' action='$action' method='$method'>");

		return new self();

	}
	public static function textarea($rows, $cols, $fieldname, $class,$returnvalue=null){

		echo "<textarea rows='$rows' cols='$cols' name='$fieldname' class='$class'>$returnvalue</textarea>";

		return new self();
	}

	public static function nform(){

		echo "</form>";

		return new self();

	}

	public static function header($file){

		include "App/Views/headers/$file.hdagger.php";

		return new self();

	}

	public static function footer($file){

		include "App/Views/footers/$file.fdagger.php";

		return new self();

	}

	public static function label($value){

		echo $value;

		return new self();
	}

	public static function br(){

		echo "<br>";

		return new self();

	}

	public static function link($value,$link,$class="btn btn-primary"){
		$link = base_url().$link;
		echo "<a class='$class' href='$link'>$value</a>";

	}

	private static function field_render($type,$name,$class,$value=null){

		echo "<input type='$type' name='$name' id='$name' class='$class' value='$value'>";

	}

	public static function csrf(){

		$token = $_SESSION['token'] = bin2hex(random_bytes(3).str_shuffle(getenv('KEY_SECRET')));

		echo "<input type='hidden' name='csrf' id='csrf' value='$token'>";

		return new self();

	}

	public static function start(){

		echo '<!doctype html>

		<html lang="en">';

		return new self();
	}

	public static function end(){

		echo '</html>';

		return new self();

	}

	public static function body(){

		echo '<body>';

		return new self();

	}

	public static function nbody(){

		echo '</body>';

		return new self();

	}

}




 ?>
