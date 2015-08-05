<?php
class SQDE_SequodeBuilderApplicationProfile {
	public static function model(){
        SQDE_PackagesHandler::add('SQDE_SitePackage');
        //SQDE_PackagesHandler::add('SQDE_SessionSyncPackage');
        
        if(SQDE_UserAuthority::isAuthenticated()){
            SQDE_PackagesHandler::add('SQDE_UserPackage');
            SQDE_PackagesHandler::add('SQDE_AuthedPackage');
            SQDE_PackagesHandler::add('SQDE_DashboardPackage');
            SQDE_PackagesHandler::add('SQDE_SequodePackage');
            if(SQDE_AuthenticatedUser::model()->role_id < 101){
                SQDE_PackagesHandler::add('SQDE_AccountPackage');
                SQDE_PackagesHandler::add('SQDE_MachinePackage');
            }
        }else{
            SQDE_PackagesHandler::add('SQDE_AuthPackage');   
        }
        
        if(SQDE_UserAuthority::isSystemOwner()){
            SQDE_PackagesHandler::add('SQDE_SessionPackage');
            SQDE_PackagesHandler::add('SQDE_UsersPackage');
            SQDE_PackagesHandler::add('SQDE_BlacklistIPPackage');
        }
        
        $packages = SQDE_PackagesHandler::models();
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