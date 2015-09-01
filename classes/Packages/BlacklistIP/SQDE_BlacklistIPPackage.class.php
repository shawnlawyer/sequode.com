<?php
class SQDE_BlacklistIPPackage {
    public static $package = 'BlacklistIP'; 
	public static function model(){
        $model = (object) null;
        $model->context = 'blocklist';
        $model->modeler = 'SQDE_BlacklistIP';
        $model->operations = 'SQDE_BlacklistIPOperations';
		return $model;
	}
}