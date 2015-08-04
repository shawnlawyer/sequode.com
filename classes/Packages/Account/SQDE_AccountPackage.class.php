<?php
class SQDE_AccountPackage {
    public static $package = 'Account';
	public static function model($set = false){
        $model = (object) null;
        $model->card_objects = 'SQDE_AccountCardObjects';
        $model->form_objects = 'SQDE_AccountFormObjects';
        $model->operations = 'SQDE_UserOperations';
        $model->ajax = (object) null;
        $model->ajax->operations = 'SQDE_AccountOperationsAjax';
        $model->ajax->forms = 'SQDE_AccountFormsAjax';
        $model->ajax->cards = 'SQDE_AccountCardsAjax';
		return $model;
	}
}