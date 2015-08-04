<?php
class SQDE_MachineOperations {
    public static function getModel($value = null, $by = null, $owner_id = null){
        $sequode_model = new SQDE_Machine::$model;
        switch($by){
            case 'id':
            case 'name':
                break;
            default:
                $by = 'id';
                break;
        }
        if($value != null){
            $where[] = array('field'=>$by,'operator'=>'=','value'=>$value);
        }
        if($owner_id != null){
            $where[] = array('field'=>'owner_id','operator'=>'=','value'=>$owner_id);
        }
        $sequode_model->getAll($where,'id',false,1);
        $id = false;
        foreach($sequode_model->all as $key => $object){
            $id = $object->id;
			break;
        }
        if($id != false){
            SQDE_Machine::exists($id,'id');
            return SQDE_Machine::model();
        }
        return false;   
	}
    public static function updateName($name, $machine_model = null){
        if($machine_model != null ){ SQDE_Machine::model($machine_model); }
        SQDE_Machine::model()->updateField(str_replace(" ","_",$name),'name');
        return SQDE_Machine::model();
    }
    public static function newMachine($owner = 0){
        SQDE_Machine::model()->create();
        SQDE_Machine::exists(SQDE_Machine::model()->id,'id');
        SQDE_Machine::model()->updateField(substr(SQDE_Session::uniqueHash('machine_name','SQDEMAC'),0,15),'name');
        SQDE_Machine::model()->updateField($owner,'owner_id');
        return SQDE_Machine::model();
	}
    public static function delete($machine_model = null){
        if($machine_model != null ){ SQDE_Machine::model($machine_model); }
        SQDE_Machine::model()->delete(SQDE_Machine::model()->id);
        return SQDE_Machine::model();
    }
}