<?php
header("Content-type: text/html; charset=utf-8");
if (get_magic_quotes_gpc()) {
	function stripslashes_deep($value){
		$value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value); 
		return $value; 
	}
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE); 
}
define('APP_DEBUG',true);
define('APP_NAME', 'Cycms');
define('CONF_PATH','./Cycmsdata/conf/');
define('RUNTIME_PATH','./Cycmsdata/logs/');
define('TMPL_PATH','./themes/');
define('HTML_PATH','./Cycmsdata/html/');
define('APP_PATH','./Cycms/');
define('CORE','./Cycms/_Core');
require(CORE.'/Cycms.php');
?>