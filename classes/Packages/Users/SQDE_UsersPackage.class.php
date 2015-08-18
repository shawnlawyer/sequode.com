<?php
class SQDE_UsersPackage {
    public static $package = 'Users';
	public static function model($set = false){
        $model = (object) null;
        $model->card_objects = 'SQDE_UsersCardObjects';
        $model->form_objects = 'SQDE_UsersFormObjects';
        $model->operations = 'SQDE_UserOperations';
        $model->finder = 'SQDE_UsersFinder';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_UsersOperationsXHR';
        $model->xhr->forms = 'SQDE_UsersFormsXHR';
        $model->xhr->cards = 'SQDE_UsersCardsXHR';
		return $model;
	}
}