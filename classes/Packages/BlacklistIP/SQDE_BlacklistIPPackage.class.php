<?php
class SQDE_BlacklistIPPackage {
    public static $package = 'BlacklistIP'; 
	public static function model($set = false){
        $model = (object) null;
        $model->operations = 'SQDE_BlacklistIPCardObjects';
        $model->ajax = (object) null;
        $model->ajax->operations = 'SQDE_BlacklistIPOperationsAjax';
		return $model;
	}
}