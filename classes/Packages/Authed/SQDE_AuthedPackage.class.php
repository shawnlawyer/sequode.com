<?php
class SQDE_AuthedPackage {
    public static $package = 'Authed';
	public static function model(){
        $model = (object) null;
        $model->context = 'authed';
        $model->card_objects = 'SQDE_AuthedCardObjects';
        $model->routes = array(
			'SQDE_AuthedRoutes'
		);
		return $model;
	}
}