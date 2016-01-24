<?php
class SQDE_UserPackage {
    public static $package = 'User';
	public static function model(){
        $model = (object) null;
        $model->context = 'user';
        $model->modeler = 'SQDE_User';
        $model->card_objects = 'SQDE_UserCardObjects';
        $model->form_objects = 'SQDE_UserFormObjects';
        $model->operations = 'SQDE_UserOperations';
        $model->finder = 'SQDE_UserFinder';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_UserOperationsXHR';
        $model->xhr->forms = 'SQDE_UserFormsXHR';
        $model->xhr->cards = 'SQDE_UserCardsXHR';
		return $model;
	}
}