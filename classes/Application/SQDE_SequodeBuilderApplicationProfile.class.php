<?php

class SQDE_SequodeBuilderApplicationProfile {
	public static function model(){
        $modules = array();
        $modules['\\'.'SQDE_ConsolePackage'];
        $modules['\\'.'SQDE_SitePackage'];
        
        if(SQDE_UserAuthority::isAuthenticated()){
            $modules['\\'.'SQDE_AuthedPackage'];
            $modules['\\'.'SQDE_SequodePackage'];
            $modules['\\'.'SQDE_AccountPackage'];
            $modules['\\'.'SQDE_PackagePackage'];
            $modules['\\'.'SQDE_TokenPackage'];
        }else{
            $modules['\\'.'SQDE_AuthPackage'];
            $modules['\\'.'SQDE_RegisterPackage'];
        }
        
        if(SQDE_UserAuthority::isSystemOwner()){
            $modules['\\'.'SQDE_SessionPackage'];
            $modules['\\'.'SQDE_UserPackage'];
            $modules['\\'.'SQDE_BlacklistIPPackage'];
        }
        
        foreach($modules as $module){
            Sequode\ModuleRegistry::add('\\'.'SQDE_BlacklistIPPackage');
        }
        
        $modules = Sequode\ModuleRegistry::models();
        $routes = array();
        foreach($modules as $module){
            if(isset($module->routes)){
                $routes = array_merge($routes, $module->routes);
            }
        }
        
        $_o = (object) null;
        $_o->routes = $routes;
        $_o->module = 'SQDE_SequodeRestAPIServerModule';
		return $_o;
	}
}