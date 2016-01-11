<?php

class SQDE_SequodeBuilderApplicationProfile {
	public static function model(){
        Sequode\ModuleRegistry::add('SQDE_ConsolePackage');
        Sequode\ModuleRegistry::add('SQDE_SitePackage');
        
        if(SQDE_UserAuthority::isAuthenticated()){
            Sequode\ModuleRegistry::add('SQDE_AuthedPackage');
            Sequode\ModuleRegistry::add('SQDE_SequodePackage');
            Sequode\ModuleRegistry::add('SQDE_AccountPackage');
            Sequode\ModuleRegistry::add('SQDE_PackagePackage');
            Sequode\ModuleRegistry::add('SQDE_TokenPackage');
        }else{
            Sequode\ModuleRegistry::add('SQDE_AuthPackage');
            Sequode\ModuleRegistry::add('SQDE_RegisterPackage');
        }
        
        if(SQDE_UserAuthority::isSystemOwner()){
            Sequode\ModuleRegistry::add('SQDE_SessionPackage');
            Sequode\ModuleRegistry::add('SQDE_UserPackage');
            Sequode\ModuleRegistry::add('SQDE_BlacklistIPPackage');
        }
        
        $packages = Sequode\ModuleRegistry::models();
        $routes = array();
        foreach($packages as $package){
            if(isset($package->routes)){
                $routes = array_merge($routes, $package->routes);
            }
        }
        
        $model = (object) null;
        $model->routes = $routes;
        $model->server_account = (SQDE_UserAuthority::isAuthenticated()) ? SQDE_AuthenticatedUser::model()->id : 2 ;
        $model->module = 'SQDE_SequodeRestAPIServerModule';
		return $model;
	}
}