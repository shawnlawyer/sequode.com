<?php
class SQDE_SequodePackage {
    public static $package = 'Sequode'; 
	public static function model($set = false){
        $model = (object) null;
        $model->card_objects = 'SQDE_SequodeCardObjects';
        $model->form_objects = 'SQDE_SequodeFormObjects';
        $model->operations = 'SQDE_SequodeOperations';
        $model->finder = 'SQDE_SequodesFinder';
		$model->routes = array(
			'SQDE_SequodeRoutes'
		);
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_SequodeOperationsAjax';
        $model->xhr->forms = 'SQDE_SequodeFormsAjax';
        $model->xhr->cards = 'SQDE_SequodeCardsAjax';
        $model->rest = (object) null;
        $model->rest->operations = 'SQDE_SequodeOperationsRest';
        $model->rest->origins = 'SQDE_SequodeOriginsRest';
		return $model;
	}
}