<?php

namespace Dedelang\Engine\Security;

use Dedelang\Http\Url;

class Attack{

	protected static $payloadAttacker = "-";
	protected static $blackListExt = ['php','exe'];

	protected static $payloadXSS = ['alert','SRC',
							'javascript',
							'http-equiv',
							'<script','<body','<input','onload','autofocus','write','<img','style','marquee'];

	protected static $payloadSql = ["' ",'" ','#--','--',' --',"'%20--",'union','select','or%201=1','order by',"'-","' or ''='",' or '];

	protected static $payloadDirectorytraversal = ['../'.'/////','\..','etc/issue','etc/passwd',
																								'etc/shadow','robot',
																								'etc/group','robot.txt',
																								'etc/hosts','.php',
																								'etc/mot'];

	protected static $cmd_injection = ['exec(','shell_exec','cmd','passthru','proc_open','expect_open',
																		 'eval','ssh2_exec','popen','proc_open','ping%CommonProgramFiles',
																		 'ping%PROGRAMFILES','cmd_by',
																		 "w'h'o'am'i",'w"h"o"am"i','powershell',
																		 "@^p^o^w^e^r^shell",'sleep${IFS}9',
																	 	 'system'];


	private static function GET(){

		(isset($_GET['url']) ? self::process_get() : '');

		$url_string = http_build_query($_GET);

		self::$payloadAttacker = $res = urldecode($url_string);

	}

	private static function process_get(){


		foreach (self::$payloadXSS as $value) {

			$res = strpos(strtolower($_GET['url']), $value);

			($res!==false || in_array($_GET['url'],self::$payloadXSS) ? self::display_error('XSS (Cross site scripting)') : '');


		}

		foreach (self::$payloadSql as $value) {

			$res = strpos(strtolower($_GET['url']), $value);

			($res!==false || in_array($_GET['url'],self::$payloadSql) ? self::display_error('SQL Injection') : '');


		}

		foreach (self::$payloadDirectorytraversal as $value) {

			$res = strpos(strtolower($_GET['url']), $value);

			($res!==false || in_array($_GET['url'],self::$payloadDirectorytraversal) ? self::display_error('Attack Directory traversal') : '');


		}

		foreach (self::$cmd_injection as $value) {

			$res = strpos(strtolower($_GET['url']), $value);

			($res!==false || in_array($_GET['url'],self::$cmd_injection) ? self::display_error('Command Injection') : '');


		}

	}

	private static function POST(){


		self::check_csrf();

		(isset($_FILES)?self::blockExt():'');

		$url_string = http_build_query($_POST);

		self::$payloadAttacker = urldecode($url_string);

			foreach (self::$payloadXSS as $valuepayload) {

				foreach ($_POST as $key => $value) {
					if(!is_array($value)){
						$res = strpos(strtolower($value), $valuepayload);

						($res!==false || in_array($value,self::$payloadXSS) ? self::display_error('XSS (Cross site scripting)') : '');
					}
				}

			}

			foreach (self::$payloadSql as $valuesql) {

				foreach ($_POST as $value) {
					if(!is_array($value)){
					$res = strpos(strtolower($value), $valuesql);

					($res!==false || in_array($value,self::$payloadSql) ? self::display_error('SQL Injection') : '');

				}
			}
		}
	}



	public static function run(){

		$method = strtolower($_SERVER['REQUEST_METHOD']);
		(strtolower(getenv('WAF_PROTECTION'))==="on"?($method==='post'? self::POST() : (($method==='get'? self::GET() : self::display_error('Changing Request Method')))):'');

	}

	private static function check_csrf(){

		if(strtolower(getenv('CSRF_PROTECTION'))==="on"){

			(!isset($_SESSION['token'])?self::display_error('Changing CSRF value token'):'');

			(!isset($_POST['csrf']) || $_SESSION['token']!==$_POST['csrf'] ? self::display_error('Changing CSRF value token') : '');


		}
			unset($_SESSION['token']);

	}

	public static function display_error($type_attack){

		$findings['attack'] = safe($type_attack);

		$findings['user_agent'] = safe($_SERVER['HTTP_USER_AGENT']);

		$findings['request_method'] = safe($_SERVER['REQUEST_METHOD']);

		$findings['ip'] = safe($_SERVER['REMOTE_ADDR']);

		$findings['payload'] = safe(self::$payloadAttacker);

		extract($findings);

		include("App/Views/Waf/Firewall.php");

		die();
	}

	private static function blockExt(){

		foreach ($_FILES as $key => $value) {

					$ext = strtolower(pathinfo($_FILES[$key]['name'], PATHINFO_EXTENSION));

					$res = strrpos($ext, self::$blackListExt[0]);

					($res !==false || in_array($ext,self::$blackListExt)  ? self::display_error('Uploading Back Door') : '');


		}
	}

}

 ?>
