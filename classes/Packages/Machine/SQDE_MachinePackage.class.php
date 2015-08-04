<?php
class SQDE_MachinePackage {
    public static $package = 'Machine'; 
	public static function model($set = false){
        $model = (object) null;
        $model->card_objects = 'SQDE_MachineCardObjects';
        $model->form_objects = 'SQDE_MachineFormObjects';
        $model->operations = 'SQDE_MachineOperations';
        $model->finder = 'SQDE_MachinesFinder';
        $model->ajax = (object) null;
        $model->ajax->operations = 'SQDE_MachineOperationsAjax';
        $model->ajax->forms = 'SQDE_MachineFormsAjax';
        $model->ajax->cards = 'SQDE_MachineCardsAjax';
		return $model;
	}
}