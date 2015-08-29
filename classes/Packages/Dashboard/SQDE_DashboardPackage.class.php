<?php
class SQDE_DashboardPackage {
    public static $package = 'Dashboard'; 
	public static function model(){
        $model = (object) null;
        $model->context = 'dashboard';
        $model->card_objects = 'SQDE_DashboardCardObjects';
        $model->xhr = (object) null;
        $model->xhr->cards = 'SQDE_DashboardCardsXHR';
		return $model;
	}
}