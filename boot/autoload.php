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
/*
spl_autoload_register(function ($class){
    $prefix = 'Sequode';
    $extention = '.class.php';
    $class_pieces = explode('\\', trim($class,'\\'));
    if($class_pieces[0] != $prefix){
        return;
    }
    array_shift($class_pieces);
    $directories = explode((!empty($_SERVER["WINDIR"])) ? ';' : ':', get_include_path());
    foreach($directories as $directory){
		$file = $directory . DIRECTORY_SEPARATOR . $prefix . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . implode( DIRECTORY_SEPARATOR, $class_pieces ) . $extention;
		if(file_exists($file)){
			require_once($file);
            return true;
        }
	}
    return false;
});
*/

spl_autoload_register(function ($class){
    $prefix = 'Sequode';
    $extention = '.class.php';
    $class_pieces = explode('\\', trim($class,'\\'));
    if($class_pieces[0] != $prefix){
        return;
    }
    array_shift($class_pieces);
    $directory = '../vendor';
    $file = $directory . DIRECTORY_SEPARATOR . $prefix . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . implode( DIRECTORY_SEPARATOR, $class_pieces ) . $extention;
    if(file_exists($file)){
        
        require_once($file);
        return true;
    }
    return false;
});

spl_autoload_register(function ($class){
    $prefix = 'Application';
    $extention = '.class.php';
    $class_pieces = explode('\\', trim($class,'\\'));
    if($class_pieces[0] != $prefix){
        return;
    }
    array_shift($class_pieces);
    $directory = __DIR__ . '../app';
    
    $file = $directory . DIRECTORY_SEPARATOR . implode( DIRECTORY_SEPARATOR, $class_pieces ) . $extention;
    if(file_exists($file)){
        require_once($file);
        return true;
    }
	
    return false;
});