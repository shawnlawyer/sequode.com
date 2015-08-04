<?php
class SQDE_SessionPackage {
    public static $package = 'Session'; 
	public static function model($set = false){
        $model = (object) null;
        $model->card_objects = 'SQDE_SessionCardObjects';
        $model->form_objects = 'SQDE_SessionFormObjects';
        $model->operations = 'SQDE_SessionOperations';
        $model->finder = 'SQDE_SessionsFinder';
        $model->ajax = (object) null;
        $model->ajax->operations = 'SQDE_SessionOperationsAjax';
        $model->ajax->forms = 'SQDE_SessionFormsAjax';
        $model->ajax->cards = 'SQDE_SessionCardsAjax';
		return $model;
	}
}