<?php
class SQDE_TokenPackage {
    public static $package = 'Token'; 
	public static function model(){
        $model = (object) null;
        $model->modeler = 'SQDE_Token';
        $model->card_objects = 'SQDE_TokenCardObjects';
        $model->form_objects = 'SQDE_TokenFormObjects';
        $model->operations = 'SQDE_TokenOperations';
        $model->finder = 'SQDE_TokensFinder';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_TokenOperationsXHR';
        $model->xhr->forms = 'SQDE_TokenFormsXHR';
        $model->xhr->cards = 'SQDE_TokenCardsXHR';
		return $model;
	}
}