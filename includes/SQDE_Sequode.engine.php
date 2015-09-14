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
			autoload_files($class.'.class.php','class');
			return;
		}
	}
}
function autoload_files($file,$stack,$dump=false){
	static $stacks = array();
    if (is_string($stack) && !in_array($stack,$stacks)) {
		$stacks[$stack] = array();
	}
	if (is_string($file) && !in_array($file,$stacks[$stack])) {
		$stacks[$stack][] = $file;
	}
	if($dump != false){
		return $stacks;
	}else{
		if(in_array($file,$stacks[$stack])){
			return null;
		}else{
			return $stacks[$stack][search_array($file,$stacks[$stack])];
		}
	}
}
date_default_timezone_set('America/Los_Angeles');
ob_start('ob_gzhandler');
SQDE_Session::start();
if(SQDE_Session::is('user_id')){
    SQDE_AuthenticatedUser::exists(SQDE_Session::get('user_id'),'id');
}
SQDE_ApplicationProfile::model($_SERVER['APPLICATION_PROFILE']);