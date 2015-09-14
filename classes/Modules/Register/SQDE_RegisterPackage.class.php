<?php
class SQDE_RegisterPackage {
    public static $package = 'Register';
	public static function model(){
        $model = (object) null;
        $model->context = 'register';
        $model->modeler = 'SQDE_User';
        $model->card_objects = 'SQDE_RegisterCardObjects';
        $model->form_objects = 'SQDE_RegisterFormObjects';
        $model->operations = 'SQDE_RegisterOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_RegisterOperationsXHR';
        $model->xhr->cards = 'SQDE_RegisterCardsXHR';
		return $model;
	}
}