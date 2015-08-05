<?php
class SQDE_PackageOperations {
    public static function getModel($value = null, $by = null, $owner_id = null){
        $sequode_model = new SQDE_Package::$model;
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
            SQDE_Package::exists($id,'id');
            return SQDE_Package::model();
        }
        return false;   
	}
    public static function updateName($name, $machine_model = null){
        if($machine_model != null ){ SQDE_Package::model($machine_model); }
        SQDE_Package::model()->updateField(str_replace(" ","_",$name),'name');
        return SQDE_Package::model();
    }
    public static function newPackage($owner = 0){
        SQDE_Package::model()->create();
        SQDE_Package::exists(SQDE_Package::model()->id,'id');
        SQDE_Package::model()->updateField(substr(SQDE_Session::uniqueHash('machine_name','SQDEMAC'),0,15),'name');
        SQDE_Package::model()->updateField($owner,'owner_id');
        return SQDE_Package::model();
	}
    public static function delete($machine_model = null){
        if($machine_model != null ){ SQDE_Package::model($machine_model); }
        SQDE_Package::model()->delete(SQDE_Package::model()->id);
        return SQDE_Package::model();
    }
}