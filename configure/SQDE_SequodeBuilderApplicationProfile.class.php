<?php

use Sequode\Model\Module\Registry as ModuleRegistry;

class SQDE_SequodeBuilderApplicationProfile {
	public static function model(){
        $modules = array();
        $modules[] = '\\'.'SQDE_ConsolePackage';
        $modules[] = '\\'.'SQDE_SitePackage';
        
        if(SQDE_UserAuthority::isAuthenticated()){
            $modules[] = Sequode\Application\Modules\Authed\Module::class;
            $modules[] = '\\'.'SQDE_SequodePackage';
            $modules[] = '\\'.'SQDE_AccountPackage';
            $modules[] = '\\'.'SQDE_PackagePackage';
            $modules[] = '\\'.'SQDE_TokenPackage';
        }else{
            $modules[] = Sequode\Application\Modules\Auth\Module::class;
            $modules[] = Sequode\Application\Modules\Register\Module::class;
        }
        
        if(SQDE_UserAuthority::isSystemOwner()){
            $modules[] = '\\'.'SQDE_SessionPackage';
            $modules[] = Sequode\Application\Modules\User\Module::class;
            $modules[] = '\\'.'SQDE_BlacklistIPPackage';
        }
        
        foreach($modules as $module){
            ModuleRegistry::add($module);
        }
        
        $modules = ModuleRegistry::models();
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