<?php
class SQDE_PackagePackage {
    public static $package = 'Package'; 
	public static function model($set = false){
        $model = (object) null;
        $model->context = 'package';
        $model->collections = (object) null;
        $model->collections->main = 'packages';
        $model->collections->search = 'package_search';
        $model->modeler = 'SQDE_Package';
        $model->finder = 'SQDE_PackageFinder';
        $model->card_objects = 'SQDE_PackageCardObjects';
        $model->form_objects = 'SQDE_PackageFormObjects';
        $model->operations = 'SQDE_PackageOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_PackageOperationsXHR';
        $model->xhr->forms = 'SQDE_PackageFormsXHR';
        $model->xhr->cards = 'SQDE_PackageCardsXHR';
		return $model;
	}
}