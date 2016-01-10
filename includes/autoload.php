<?php

spl_autoload_register(function($class){
    $extention = '.class.php';
    $directories = explode((!empty($_SERVER["WINDIR"])) ? ';' : ':', get_include_path());
    foreach($directories as $directory){
		$file = $directory . DIRECTORY_SEPARATOR . $class . $extention;
		if(file_exists($file)){
			require_once($file);
            return true;
        }
	}
    return false;
});
spl_autoload_register(function ($class){
    $extention = '.class.php';
    $class_pieces = explode('\\',$class);    
    $directories = explode((!empty($_SERVER["WINDIR"])) ? ';' : ':', get_include_path());
    foreach($directories as $directory){
		$file = $directory . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . implode( DIRECTORY_SEPARATOR, $class_pieces ) . $extention;
		if(file_exists($file)){
			require_once($file);
            return true;
        }
	}
    return false;
});