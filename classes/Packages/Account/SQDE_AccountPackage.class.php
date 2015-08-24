<?php
class SQDE_AccountPackage {
    public static $package = 'Account';
	public static function model($set = false){
        $model = (object) null;
        $model->context = 'account';
        $model->collections = (object) null;
        $model->modeler = 'SQDE_AuthenticatedUser';
        $model->card_objects = 'SQDE_AccountCardObjects';
        $model->form_objects = 'SQDE_AccountFormObjects';
        $model->operations = 'SQDE_UserOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_AccountOperationsXHR';
        $model->xhr->forms = 'SQDE_AccountFormsXHR';
        $model->xhr->cards = 'SQDE_AccountCardsXHR';
		return $model;
	}
}