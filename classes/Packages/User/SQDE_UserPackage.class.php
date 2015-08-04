<?php
class SQDE_UserPackage {
    public static $package = 'User';
	public static function model($set = false){
        $model = (object) null;
        $model->form_objects = 'SQDE_UserFormObjects';
        $model->operations = 'SQDE_UserOperations';
        $model->ajax = (object) null;
        $model->ajax->operations = 'SQDE_UserOperationsAjax';
        $model->ajax->forms = 'SQDE_UserFormsAjax';
		return $model;
	}
}