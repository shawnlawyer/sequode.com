<?php
class SQDE_SequodeBuilderApplicationProfile {
	public static function model(){
        SQDE_Packages::add('SQDE_SitePackage');
        //SQDE_Packages::add('SQDE_SessionSyncPackage');
        
        if(SQDE_UserAuthority::isAuthenticated()){
            SQDE_Packages::add('SQDE_UserPackage');
            SQDE_Packages::add('SQDE_AuthedPackage');
            SQDE_Packages::add('SQDE_DashboardPackage');
            SQDE_Packages::add('SQDE_SequodePackage');
            if(SQDE_AuthenticatedUser::model()->role_id < 101){
                SQDE_Packages::add('SQDE_AccountPackage');
                SQDE_Packages::add('SQDE_MachinePackage');
            }
        }else{
            SQDE_Packages::add('SQDE_AuthPackage');   
        }
        
        if(SQDE_UserAuthority::isSystemOwner()){
            SQDE_Packages::add('SQDE_SessionPackage');
            SQDE_Packages::add('SQDE_UsersPackage');
            SQDE_Packages::add('SQDE_BlacklistIPPackage');
        }
        
        $packages = SQDE_Packages::models();
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