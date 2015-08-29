<?php
class SQDE_TokenPackage {
    public static $package = 'Token';
	public static function model(){
        $model = (object) null;
        $model->context = 'token';
        $model->collections = 'SQDE_TokenCollections';
        $model->modeler = 'SQDE_Token';
        $model->finder = 'SQDE_TokenFinder';
        $model->card_objects = 'SQDE_TokenCardObjects';
        $model->form_objects = 'SQDE_TokenFormObjects';
        $model->operations = 'SQDE_TokenOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_TokenOperationsXHR';
        $model->xhr->forms = 'SQDE_TokenFormsXHR';
        $model->xhr->cards = 'SQDE_TokenCardsXHR';
		return $model;
	}
}