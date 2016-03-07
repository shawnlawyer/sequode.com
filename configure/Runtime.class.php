<?php

use Sequode\Model\Module\Registry as ModuleRegistry;

class Runtime {
    
	public static function model(){
        
        $modules = ModuleRegistry::modules();
        $routes = array();
        
        foreach($modules as $module){
            
            if(isset($module::model()->routes)){
                
                $routes = array_merge($routes, $module::model()->routes);
                
            }
            
        }
        
        $_o = (object) null;
        $_o->routes = $routes;
        $_o->module = HTTPAPIRequest::class;
        
		return $_o;
        
	}
    
}