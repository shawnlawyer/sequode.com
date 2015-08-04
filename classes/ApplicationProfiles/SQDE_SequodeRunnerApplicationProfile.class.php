<?php
class SQDE_SequodeRunnerApplicationProfile {
	public static function model($set = false){
		$persistant_routes = array(
			'SQDE_SiteRoutes',
			'SQDE_CommonPersistantActionRoutes'
		);
		$model = (object) null;
		$model->module = 'SQDE_SequodeRunnerServerModule';
		$model->routes = (object) null;
		$model->routes->plain = $persistant_routes;
		$model->owner = 2;
		return $model;
	}
}