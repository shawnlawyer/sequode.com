<?php

spl_autoload_register(function($class, $extention = '.class.php') {
    $directories = explode((!empty($_SERVER["WINDIR"])) ? ';' : ':', get_include_path();
    foreach(directories as $directory){
		if(file_exists($directory .  DIRECTORY_SEPARATOR . $class . $extention)){
            require_once($directory .  DIRECTORY_SEPARATOR . $class . $extention);
            return true;
        }
	}
    return false;
});

date_default_timezone_set('America/Los_Angeles');
ob_start('ob_gzhandler');
SQDE_Session::start();
if(SQDE_Session::is('user_id')){;
    SQDE_AuthOperations::load();
}
SQDE_ApplicationProfile::model($_SERVER['APPLICATION_PROFILE']);
