<?php
class SQDE_AuthPackage {
    public static $package = 'Auth';
	public static function model(){
        $model = (object) null;
        $model->context = 'auth';
        $model->modeler = 'SQDE_AuthenticatedUser';
        $model->card_objects = 'SQDE_AuthCardObjects';
        $model->form_objects = 'SQDE_AuthFormObjects';
        $model->operations = 'SQDE_AuthOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_AuthOperationsXHR';
        $model->xhr->cards = 'SQDE_AuthCardsXHR';
		return $model;
	}
}