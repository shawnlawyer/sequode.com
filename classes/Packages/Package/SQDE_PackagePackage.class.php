<?php
class SQDE_PackagePackage {
    public static $package = 'Package'; 
	public static function model($set = false){
        $model = (object) null;
        $model->card_objects = 'SQDE_PackageCardObjects';
        $model->form_objects = 'SQDE_PackageFormObjects';
        $model->operations = 'SQDE_PackageOperations';
        $model->finder = 'SQDE_PackagesFinder';
        $model->ajax = (object) null;
        $model->ajax->operations = 'SQDE_PackageOperationsAjax';
        $model->ajax->forms = 'SQDE_PackageFormsAjax';
        $model->ajax->cards = 'SQDE_PackageCardsAjax';
		return $model;
	}
}