<?php
class SQDE_DashboardPackage {
    public static $package = 'Dashboard'; 
	public static function model($set = false){
        $model = (object) null;
        $model->card_objects = 'SQDE_DashboardCardObjects';
        $model->ajax = (object) null;
        $model->ajax->cards = 'SQDE_DashboardCardsAjax';
		return $model;
	}
}