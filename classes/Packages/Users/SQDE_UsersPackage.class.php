<?php
class SQDE_UsersPackage {
    public static $package = 'Users';
	public static function model($set = false){
        $model = (object) null;
        $model->card_objects = 'SQDE_UsersCardObjects';
        $model->form_objects = 'SQDE_UsersFormObjects';
        $model->operations = 'SQDE_UserOperations';
        $model->finder = 'SQDE_UsersFinder';
        $model->ajax = (object) null;
        $model->ajax->operations = 'SQDE_UsersOperationsAjax';
        $model->ajax->forms = 'SQDE_UsersFormsAjax';
        $model->ajax->cards = 'SQDE_UsersCardsAjax';
		return $model;
	}
}