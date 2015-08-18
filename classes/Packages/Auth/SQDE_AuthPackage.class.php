<?php
class SQDE_AuthPackage {
    public static $package = 'Auth';
	public static function model(){
        $model = (object) null;
        $model->card_objects = 'SQDE_AuthCardObjects';
        $model->form_objects = 'SQDE_AuthFormObjects';
        $model->operations = 'SQDE_AuthOperations';
        $model->routes = array(
			'SQDE_AuthRoutes'
		);
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_AuthOperationsXHR';
        $model->xhr->forms = 'SQDE_AuthFormsXHR';
        $model->xhr->cards = 'SQDE_AuthCardsXHR';
        $model->rest = (object) null;
        $model->rest->operations = 'SQDE_AuthOperationsRest';
		return $model;
	}
}