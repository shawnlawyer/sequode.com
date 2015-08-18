<?php
class SQDE_MachinePackage {
    public static $package = 'Machine'; 
	public static function model($set = false){
        $model = (object) null;
        $model->card_objects = 'SQDE_MachineCardObjects';
        $model->form_objects = 'SQDE_MachineFormObjects';
        $model->operations = 'SQDE_MachineOperations';
        $model->finder = 'SQDE_MachinesFinder';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_MachineOperationsXHR';
        $model->xhr->forms = 'SQDE_MachineFormsXHR';
        $model->xhr->cards = 'SQDE_MachineCardsXHR';
		return $model;
	}
}