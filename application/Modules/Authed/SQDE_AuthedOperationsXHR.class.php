<?php

use Sequode\Model\Module\Registry as ModuleRegistry;

class SQDE_AuthedOperationsXHR {
    public static $package = 'Authed';
	public static $merge = false;
	public static $routes = array(
		'logout'
	);
	public static $routes_to_methods = array(
		'logout' => 'logout'
    );
    public static function logout(){
        $operations = ModuleRegistry::model(static::$package)->operations;
        forward_static_call_array(array($operations,__FUNCTION__),array());
        return SQDE_ConsoleRoutes::js(false);
    }
}