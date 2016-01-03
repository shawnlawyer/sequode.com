<?php
function __autoload($class) { 
	if(!empty($_SERVER["WINDIR"])){
		$incToken = ";";
		$dirSep = "\\";
	}else{
		$incToken = ":";
		$dirSep = "/";
	}
    foreach(explode($incToken, get_include_path()) as $path){
		$file=$path.$dirSep.$class.'.class.php';
		if(file_exists($file)){
			require_once($file);
			return;
		}
	}
}
/*
spl_autoload_register(function($class, $extention = '.class.php') {
    $directories = explode((!empty($_SERVER["WINDIR"])) ? ';' : ':', get_include_path());
    foreach(directories as $directory){
        echo $directory . DIRECTORY_SEPARATOR . $class . $extention;
		if(file_exists($directory . DIRECTORY_SEPARATOR . $class . $extention)){
            require_once($directory . DIRECTORY_SEPARATOR . $class . $extention);
            return true;
        }
	}
    return false;
});
*/
date_default_timezone_set('America/Los_Angeles');
ob_start('ob_gzhandler');
SQDE_Session::start();
if(SQDE_Session::is('user_id')){;
    SQDE_AuthOperations::load();
}
SQDE_ApplicationProfile::model($_SERVER['APPLICATION_PROFILE']);