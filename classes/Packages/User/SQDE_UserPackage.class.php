<?php
class SQDE_UserPackage {
    public static $package = 'User';
	public static function model($set = false){
        $model = (object) null;
        $model->form_objects = 'SQDE_UserFormObjects';
        $model->operations = 'SQDE_UserOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_UserOperationsAjax';
        $model->xhr->forms = 'SQDE_UserFormsAjax';
		return $model;
	}
}