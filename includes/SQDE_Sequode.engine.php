<?php
spl_autoload_register(function($class) { 
    $paths = explode((!empty($_SERVER["WINDIR"])) ? ';' : ':', get_include_path());
    foreach($paths as $path){
		$file=$path.'/'.$class.'.class.php';
		if(file_exists($file)){
			require_once($file);
			return;
		}
	}
});
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