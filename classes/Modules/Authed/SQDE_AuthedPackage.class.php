<?php
class SQDE_AuthedPackage {
    public static $package = 'Authed';
	public static function model(){
        $model = (object) null;
        $model->context = 'authed';
        $model->operations = 'SQDE_AuthOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_AuthedOperationsXHR';
		return $model;
	}
}