<?php
class SQDE_SitePackage {
    public static $package = 'Site';
	public static function model(){
        $model = (object) null;
        $model->context = 'site';
        $model->card_objects = 'SQDE_SiteCardObjects';
        $model->xhr = (object) null;
        $model->xhr->cards = 'SQDE_SiteCardsXHR';
		return $model;
	}
}