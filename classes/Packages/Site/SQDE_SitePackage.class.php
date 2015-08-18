<?php
class SQDE_SitePackage {
    public static $package = 'Site';
	public static function model($set = false){
        $model = (object) null;
        $model->card_objects = 'SQDE_SiteCardObjects';
		$model->routes = array(
			'SQDE_SiteRoutes',
			'SQDE_SiteAjaxRoutes',
			'SQDE_SequodeOriginRestrictedViewRoutes',
		);
        $model->xhr = (object) null;
        $model->xhr->cards = 'SQDE_SiteCardsAjax';
		return $model;
	}
}