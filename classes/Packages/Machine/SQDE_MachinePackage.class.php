<?php
class SQDE_MachinePackage {
    public static $package = 'Machine'; 
	public static function model(){
        $model = (object) null;
        $model->context = 'machine';
        $model->collections = (object) null;
        $model->collections->main = 'machines';
        $model->collections->search = 'machine_search';
        $model->modeler = 'SQDE_Machine';
        $model->finder = 'SQDE_MachineFinder';
        $model->card_objects = 'SQDE_MachineCardObjects';
        $model->form_objects = 'SQDE_MachineFormObjects';
        $model->operations = 'SQDE_MachineOperations';
        $model->xhr = (object) null;
        $model->xhr->operations = 'SQDE_MachineOperationsXHR';
        $model->xhr->forms = 'SQDE_MachineFormsXHR';
        $model->xhr->cards = 'SQDE_MachineCardsXHR';
		return $model;
	}
}