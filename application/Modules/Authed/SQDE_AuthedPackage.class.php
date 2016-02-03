<?php
class SQDE_AuthedPackage {
    public static $package = 'Authed';
	public static function model(){
        $model = (object) null;
        $model->context = 'authed';
        $model->modeler = \Sequode\Application\Modules\Auth\Modeler::class;
        $model->card_objects = 'SQDE_AuthedCardObjects';
        $model->operations = 'SQDE_AuthedOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_AuthedOperationsXHR';
		return $model;
	}
}