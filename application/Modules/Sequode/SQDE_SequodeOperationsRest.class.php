<?php
class SQDE_SequodeOperationsRest{
	public static function surfaceMine($sequode_model_id = 0){
		if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isCode()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
		
		try{
			SQDE_SequodeOperations::buildSequodeCodeNodeOffMineObject();
		}catch(Exception $e){
			exit;
		}
        $object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
	}
	public static function cacheNode($sequode_model_id = 0){
		if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::isSystemOwner()
        )){ return; }
        try{
			SQDE_SequodeOperations::regenerateProcessDescriptionNode();
		}catch(Exception $e){
			exit;
		}
        $object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
	}
	public static function maintenance($sequode_model_id = 0){
        
		if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        
		try{
            SQDE_SequodeOperations::maintenance();
		}catch(Exception $e){
			exit;
		}
        $object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
	}
	public static function newSequence(){
        if(!(
            SQDE_UserAuthority::canCreate()
        )){ return; }
        SQDE_SequodeOperations::newSequence(\Sequode\Application\Modules\Auth\Modeler::model()->id);
        $object = (object) null;
        $object->Success = 1;
		$object->Model_Id = SQDE_Sequode::model()->id;
        echo json_encode($object);
        exit;
	}
	public static function cloneSequence($sequode_model_id = 0){
        if(!(
        SQDE_UserAuthority::canCreate()
        && SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canCopy()
        )){ return; }
		SQDE_SequodeOperations::makeSequenceCopy(\Sequode\Application\Modules\Auth\Modeler::model()->id);
		$object = (object) null;
        $object->Success = 1;
		$object->Model_Id = SQDE_Sequode::model()->id;
        echo json_encode($object);
        exit;
	}	
	public static function formatSequence($sequode_model_id = 0){
		if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
		
        SQDE_SequodeOperations::makeDefaultSequencedSequode();
		$object = (object) null;
        $object->Success = 1;
		echo json_encode($object);
        exit;
	}
	public static function deleteSequence($sequode_model_id = 0){
		if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canDelete()
        )){ return; }
        SQDE_SequodeOperations::deleteSequence();
		$object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
	}
	public static function addToSequence($sequode_model_id = 0, $add_sequode_model_id = 0, $position = 0, $position_tuner = null , $grid_modifier = null ){
		if(!(
		SQDE_Sequode::exists($add_sequode_model_id,'id')
		&& SQDE_UserAuthority::canRun()
		&& SQDE_Sequode::exists($sequode_model_id,'id')
		&& SQDE_UserAuthority::canEdit()
        && SQDE_SequodeAuthority::isSequence()
        && !SQDE_SequodeAuthority::isFullSequence()
		)){ return; }
		SQDE_SequodeOperations::addToSequence($add_sequode_model_id, $position, $position_tuner, $grid_modifier);
		$object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
	}
	public static function reorderSequence($sequode_model_id = 0, $from_position = 0, $to_position = 0, $position_tuner = null , $grid_modifier = null ){
		if(!(
		SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
		&& SQDE_UserAuthority::canEdit()
		)){ return; }
		SQDE_SequodeOperations::reorderSequence($from_position, $to_position, $position_tuner, $grid_modifier);
		$object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
	}
	public static function removeFromSequence($sequode_model_id = 0, $position = 0){
		if(!(
		SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
		&& SQDE_UserAuthority::canEdit()
		)){ return; }
        SQDE_SequodeOperations::removeFromSequence($position);
		$object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
	}
	public static function modifyGridAreas($sequode_model_id = 0, $position = 0){
		if(!(
		SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
		&& SQDE_UserAuthority::canEdit()
		)){ return; }
        SQDE_SequodeOperations::modifyGridAreas($position);
		$object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
	}
	public static function emptySequence($sequode_model_id = 0){
		if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::emptySequence();
		$object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
	}
	public static function moveGridArea($sequode_model_id = 0, $grid_area_key = 0, $x = 0, $y = 0){
		if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::moveGridArea($grid_area_key, $x, $y);
		$object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
	}
    public static function updateValue($sequode_model_id = 0, $type = false, $map_key = 0, $value = null){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::updateValue($type, $map_key, $value);
		$object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
    }
    public static function addInternalConnection($sequode_model_id = 0 ,$receiver_type = false, $transmitter_key = 0, $receiver_key = 0){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::addInternalConnection($receiver_type, $transmitter_key, $receiver_key);
		$object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
    }
    public static function addExternalConnection($sequode_model_id = 0, $connection_type = false, $transmitter_key = 0, $receiver_key = 0){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::addExternalConnection($connection_type, $transmitter_key, $receiver_key);
		$object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
    }
    public static function removeReceivingConnection($sequode_model_id = 0, $connection_type = false, $restore_key = 0){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::removeReceivingConnection($connection_type, $restore_key);
		$object = (object) null;
        $object->Success = 1;
        echo json_encode($object);
        exit;
    }
    public static function updateTenancy($value = 0, $sequode_model_id = 0){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::isSystemOwner()
        )){ return; }
        SQDE_SequodeOperations::updateTenancy($value);
        exit;
    }
    public static function updateSharing($value = 0, $sequode_model_id = 0){
       if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canShare()
        )){ return; }
        SQDE_SequodeOperations::updateSharing($value);
        exit;
    }
    public static function updateCodeSharing($sequode_model_id = 0, $value = 1){
       if(!(
        SQDE_UserAuthority::isSystemOwner()
        && SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isCode()
        && SQDE_SequodeAuthority::isCodingTypeFunction()
        )){ return; }
        SQDE_SequodeOperations::updateSharing($value);
        exit;
    }
    public static function updateName($sequode_model_id = 0, $name=''){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ 
            return;
        }
        $object = (object) null;
        $object->Success = false;
        $name = trim(str_replace('-','_',str_replace(' ','_',urldecode($name))));
        if(strlen($name)==0){
            $object->Error = 'Name cannot be empty';
        }elseif(!eregi("^([A-Za-z0-9_])*$",$name)){
            $object->Error = 'Name can be alphanumeric and contain spaces only';
        }elseif(!SQDE_UserAuthority::canRename($name)){
            $object->Error = 'Name already used';
        }
        if(!isset($object->Error)){
            SQDE_Sequode::exists($sequode_model_id,'id');
            SQDE_SequodeOperations::updateName($name);
            $object->Success = true;
        }
        echo json_encode($object);
        return;
    }
}