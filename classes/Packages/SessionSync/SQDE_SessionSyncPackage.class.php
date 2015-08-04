<?php
class SQDE_SessionSyncPackage {
    public static $package = 'SessionSync'; 
	public static function model(){
        $model = (object) null;
		$model->routes = array(
			'SQDE_SessionSyncServerRoutes'
		);
		return $model;
	}
}