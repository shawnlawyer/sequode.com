<?php
class SQDE_AuthedPackage {
    public static $package = 'Authed';
	public static function model(){
        $model = (object) null;
        $model->routes = array(
			'SQDE_AuthedRoutes'
		);
		return $model;
	}
}