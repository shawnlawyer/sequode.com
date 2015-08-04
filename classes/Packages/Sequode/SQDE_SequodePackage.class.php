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
        $model->ajax = (object) null;
        $model->ajax->operations = 'SQDE_SequodeOperationsAjax';
        $model->ajax->forms = 'SQDE_SequodeFormsAjax';
        $model->ajax->cards = 'SQDE_SequodeCardsAjax';
        $model->rest = (object) null;
        $model->rest->operations = 'SQDE_SequodeOperationsRest';
        $model->rest->origins = 'SQDE_SequodeOriginsRest';
		return $model;
	}
}