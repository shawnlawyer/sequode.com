<?php
class SQDE_PackageOperations {
    public static $package = 'Package';
    
    public static function getModel($value = null, $by = null, $owner_id = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = new $modeler::$model;
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
        $_model->getAll($where,'id',false,1);
        $id = false;
        foreach($_model->all as $key => $object){
            $id = $object->id;
			break;
        }
        if($id != false){
            $modeler::exists($id,'id');
            return $modeler::model();
        }
        return false;   
	}
    public static function updatePackageSequode($sequode_id, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $modeler::model()->updateField($sequode_id,'sequode_id');
        return $modeler::model();
    }
    public static function updateName($name, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $modeler::model()->updateField(str_replace(" ","_",$name),'name');
        return $modeler::model();
    }
    public static function newPackage($owner = 0){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $modeler::model()->create();
        $modeler::exists($modeler::model()->id,'id');
        $modeler::model()->updateField(substr(SQDE_Session::uniqueHash('package','SQDEPAC'),0,15),'name');
        $modeler::model()->updateField($owner,'owner_id');
        return $modeler::model();
	}
    public static function delete($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $modeler::model()->delete($modeler::model()->id);
        return $modeler::model();
    }
}