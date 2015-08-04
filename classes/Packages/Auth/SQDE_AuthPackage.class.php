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
        $model->ajax = (object) null;
        $model->ajax->operations = 'SQDE_AuthOperationsAjax';
        $model->ajax->forms = 'SQDE_AuthFormsAjax';
        $model->ajax->cards = 'SQDE_AuthCardsAjax';
        $model->rest = (object) null;
        $model->rest->operations = 'SQDE_AuthOperationsRest';
		return $model;
	}
}