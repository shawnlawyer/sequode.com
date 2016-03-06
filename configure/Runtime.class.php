<?php

use Sequode\Model\Module\Registry as ModuleRegistry;

class Runtime {
	public static function model(){
        
        $modules = ModuleRegistry::models();
        $routes = array();
        foreach($modules as $module){
            if(isset($module->routes)){
                $routes = array_merge($routes, $module->routes);
            }
        }
        
        $_o = (object) null;
        $_o->routes = $routes;
        $_o->module = HTTPAPIRequest::class;
        
		return $_o;
        
	}
    
}