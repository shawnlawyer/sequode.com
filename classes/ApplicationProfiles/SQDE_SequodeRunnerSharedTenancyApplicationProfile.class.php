<?php
class SQDE_SequodeRunnerSharedTenancyApplicationProfile {
	public static function model($set = false){
        SQDE_PackagesHandler::add('SQDE_SitePackage');
        SQDE_PackagesHandler::add('SQDE_SessionSyncPackage');
        $packages = SQDE_PackagesHandler::models();
        $routes = array();
        foreach($packages as $package){
            if(isset($package->routes)){
                $routes = array_merge($routes, $package->routes);
            }
        }
        
        $model = (object) null;
        $model->routes = $routes;
        $model->default_server_account = 2;
        $model->server_account = (SQDE_UserAuthority::isAuthenticated()) ? SQDE_AuthenticatedUser::model()->id : $model->default_server_account;
		$model->module = 'SQDE_SequodeRunnerSharedTenancyServerModule';
		return $model;
	}
}