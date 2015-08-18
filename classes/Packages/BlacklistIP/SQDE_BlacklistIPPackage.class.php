<?php
class SQDE_BlacklistIPPackage {
    public static $package = 'BlacklistIP'; 
	public static function model($set = false){
        $model = (object) null;
        $model->operations = 'SQDE_BlacklistIPCardObjects';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_BlacklistIPOperationsXHR';
		return $model;
	}
}