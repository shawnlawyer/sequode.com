<?php
class SQDE_AccountPackage {
    public static $package = 'Account';
	public static function model($set = false){
        $model = (object) null;
        $model->card_objects = 'SQDE_AccountCardObjects';
        $model->form_objects = 'SQDE_AccountFormObjects';
        $model->operations = 'SQDE_UserOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_AccountOperationsAjax';
        $model->xhr->forms = 'SQDE_AccountFormsAjax';
        $model->xhr->cards = 'SQDE_AccountCardsAjax';
		return $model;
	}
}