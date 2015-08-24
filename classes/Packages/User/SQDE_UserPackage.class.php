<?php
class SQDE_UserPackage {
    public static $package = 'User';
	public static function model(){
        $model = (object) null;
        $model->context = 'user';
        $model->collections = (object) null;
        $model->collections->main = 'user';
        $model->modeler = 'SQDE_User';
        $model->form_objects = 'SQDE_UserFormObjects';
        $model->operations = 'SQDE_UserOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_UserOperationsXHR';
        $model->xhr->forms = 'SQDE_UserFormsXHR';
		return $model;
	}
}