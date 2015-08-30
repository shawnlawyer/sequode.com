<?php
class SQDE_SessionPackage {
    public static $package = 'Session'; 
	public static function model(){
        $model = (object) null;;
        $model->context = 'session';
        $model->collections = 'SQDE_SessionCollections';
        $model->modeler = 'SQDE_Session';
        $model->finder = 'SQDE_SessionFinder';
        $model->card_objects = 'SQDE_SessionCardObjects';
        $model->form_objects = 'SQDE_SessionFormObjects';
        $model->operations = 'SQDE_SessionOperations';
        $model->finder = 'SQDE_SessionFinder';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_SessionOperationsXHR';
        $model->xhr->forms = 'SQDE_SessionFormsXHR';
        $model->xhr->cards = 'SQDE_SessionCardsXHR';
		return $model;
	}
}