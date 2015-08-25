<?php
class SQDE_SequodeOperations {
    public static $package = 'Sequode';
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
	public static function updateTenancy($value = 0, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        switch(intval($value)){
            case 1:
                break;
            default:
                $value = 0;
            
        }
        $modeler::model()->updateField($value,'safe');
        return $modeler::model();
	}
	public static function updateSharing($value = 0, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        switch(intval($value)){
            case 1:
                break;
            default:
                $value = 0;
            
        }
        $modeler::model()->updateField($value,'shared');
        return $modeler::model();
	}
	public static function updateIsPalette($value = 0, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        switch(intval($value)){
            case 1:
                break;
            default:
                $value = 0;
            
        }
        $modeler::model()->updateField($value,'palette');
        return $modeler::model();
	}
	public static function updateIsPackage($value = 0, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        switch(intval($value)){
            case 1:
                break;
            default:
                $value = 0;
            
        }
        $modeler::model()->updateField($value,'package');
        return $modeler::model();
	}
    public static function updateName($name, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $modeler::model()->updateField(str_replace(" ","_",$name),'name');
        self::maintenance();
        return $modeler::model();
    }
    public static function updateDescription($description, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $description = htmlentities(strip_tags($description), ENT_NOQUOTES);
        $description = (strlen($description) <= 1000) ? $description : substr($description, 0, 1000);
        $detail = json_decode($modeler::model()->detail);
        $detail->description = $description;
        $modeler::model()->updateField(json_encode($detail),'detail');
        self::maintenance();
        return $modeler::model();
    }
    public static function updateComponentSettings($type, $member, $input_object, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        switch($type){
            case 'input':
            case 'property':
                $object_member = $type.'_form_object';
                break;
            default:
                return $modeler::model();
        }
		$form_object = json_decode($modeler::model()->$object_member);
		$component = new SQDE_Components();
		if(!$component->exists($input_object->Component,'name')){$component->exists('str','name');}
		$form_object_member = (object) null;
		$component_form_object = json_decode($component->component_form_object);
		foreach($component_form_object as $loop_member => $loop_value){
			if(isset($input_object->$loop_member)){
					$form_object_member->$loop_member = $input_object->$loop_member;
			}
		}
		$form_object->$member = $form_object_member;
        $modeler::model()->updateField(json_encode($form_object),$object_member);
        self::maintenance();
        return $modeler::model();
	}
    public static function newSequence($owner = 0){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $modeler::model()->create(substr(SQDE_SequodesGenerator::uniqueHash(),0,15), '', 1, 1);
        $modeler::exists($modeler::model()->id,'id');
        $modeler::model()->updateField(substr(SQDE_SequodesGenerator::uniqueHash($modeler::model()->id.$modeler::model()->name),0,15),'name');
        $modeler::model()->updateField(1,'sequence_type');
        $modeler::model()->updateField('[]','sequence');
        $modeler::model()->updateField('[]','grid_areas');
        $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeDefaultProcessObject('input')),'input_object');
        $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeDefaultSequenceObjectMap('input',$modeler::model())),'input_object_map');
        $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeDefaultProcessInstanceObject($modeler::model())),'process_instance_object');
        $modeler::model()->updateField('{}','input_form_object');
        $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeDefaultProcessObject('output')),'output_object');
        $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeDefaultSequenceObjectMap('output',$modeler::model())),'output_object_map');
        $property_object_detail = (object) null;
        $member = 'Run_Process';
        $property_object_detail->$member = SQDE_SequodesGenerator::makeDefaultProcessObjectDetailMember($member);
        $modeler::model()->updateField(json_encode($property_object_detail),'property_object_detail');
        $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeDefaultProcessObject('property')),'property_object');
        $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeDefaultSequenceObjectMap('property',$modeler::model())),'property_object_map');
        $modeler::model()->updateField('{}','property_form_object');
        $modeler::model()->updateField('{}','input_object_detail');
        $output_object_detail = (object) null;
        $member = 'Success';
        $output_object_detail->$member = SQDE_SequodesGenerator::makeDefaultProcessObjectDetailMember($member);
        //$modeler::model()->updateField(json_encode($output_object_detail),'output_object_detail');
        $modeler::model()->updateField('{}','output_object_detail');
        $modeler::model()->updateField($owner,'owner_id');
        $modeler::model()->updateField(0,'safe');
        $modeler::model()->updateField(0,'level');
        $modeler::model()->updateField('{"display_name":"'.$modeler::model()->name.'"}','detail');
        
        self::maintenance();
        return $modeler::model();
	}
    public static function makeSequenceCopy($owner = 0, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $name = $modeler::model()->name . ' Copy ' . ($modeler::model()->times_cloned + 1);
        $printable_name = (trim($modeler::model()->printable_name) != '') ? trim($modeler::model()->printable_name) . ' Copy ' . ($modeler::model()->times_cloned + 1) : $name ;
        $model_copy = new $modeler::$model;
        $model_copy->create($name, $printable_name, 1, 1);
        $model_copy->exists($model_copy->id,'id');
        $model_copy->updateField($modeler::model()->id,'cloned_from_id');
        $model_copy->updateField(1,'sequence_type');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->sequence)),'sequence');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->safe)),'safe');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->level)),'level');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->detail)),'detail');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->grid_areas)),'grid_areas');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->input_object)),'input_object');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->input_object)),'input_object_detail');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->input_object_map)),'input_object_map');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->input_form_object)),'input_form_object');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->output_object)),'output_object');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->input_object)),'output_object_detail');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->output_object_map)),'output_object_map');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->property_object)),'property_object');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->input_object)),'property_object_detail');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->property_object_map)),'property_object_map');
        $model_copy->updateField(json_encode(json_decode($modeler::model()->property_form_object)),'property_form_object');
        $model_copy->updateField($owner,'owner_id');
        $model_copy->updateField(($modeler::model()->times_cloned + 1),'times_cloned');
		self::maintenance($model_copy);
        return $modeler::model();
	}
    public static function maintenance($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        if(SQDE_SequodeAuthority::isSequence()){
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeProcessObject('input')),'input_object');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeProcessObject('property')),'property_object');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeProcessObject('output')),'output_object');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeProcessInstanceObject()),'process_instance_object');
        
        
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::removeKeys(json_decode($modeler::model()->input_object_map))),'input_object_map');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::removeKeys(json_decode($modeler::model()->property_object_map))),'property_object_map');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::removeKeys(json_decode($modeler::model()->output_object_map))),'output_object_map');
            
        }
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::pruneFormObject('input')),'input_form_object');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::pruneFormObject('property')),'property_form_object');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::updateFormObjectMembers('input')),'input_form_object');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::updateFormObjectMembers('property')),'property_form_object');
            
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::updateProcessObjectDetails('input')),'input_object_detail');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::updateProcessObjectDetails('property')),'property_object_detail');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::updateProcessObjectDetails('output')),'output_object_detail');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::pruneProcessObjectDetails('input')),'input_object_detail');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::pruneProcessObjectDetails('property')),'property_object_detail');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::pruneProcessObjectDetails('output')),'output_object_detail');
        
        if(SQDE_SequodeAuthority::isSequence()){
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeDefaultSequenceObjectMap('input',$modeler::model())),'default_input_object_map');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeDefaultSequenceObjectMap('property',$modeler::model())),'default_property_object_map');
            $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeDefaultSequenceObjectMap('output',$modeler::model())),'default_output_object_map');
            
            self::autoSetTenancy();
        }
        self::regenerateProcessDescriptionNode();
        return $modeler::model();
    }
    public static function regenerateProcessDescriptionNode($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeSequodeProcessDescriptionNode()),'process_description_node');
        return $modeler::model();
    }
	public static function makeDefaultSequencedSequode( $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		if(intval($modeler::model()->usage_type) != 1){return false;}
		$input_object = (object) null;
		$input_object->Request = $modeler::model()->name;
        $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::defaultGridAreas(count(json_decode($modeler::model()->sequence)))),'grid_areas');
		$modeler::model()->updateField('{}','input_object');
		$modeler::model()->updateField('{}','property_object');
		$modeler::model()->updateField('{}','output_object');
		$modeler::model()->updateField('{}','input_form_object');
		$modeler::model()->updateField('{}','property_form_object');
		$modeler::model()->updateField('{}','process_description_node');
		$modeler::model()->updateField('{"Request_Name":"'.$modeler::model()->name.'","Parameters":{}}','process_instance_object');	
		$modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::removeKeys(SQDE_SequodesGenerator::makeDefaultSequenceObjectMap('input',$modeler::model()))),'input_object_map');
		$modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::removeKeys(SQDE_SequodesGenerator::makeDefaultSequenceObjectMap('property',$modeler::model()))),'property_object_map');
		$modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::removeKeys(SQDE_SequodesGenerator::makeDefaultSequenceObjectMap('output',$modeler::model()))),'output_object_map');
        $modeler::model()->updateField('{}','input_object_detail');
        $modeler::model()->updateField('{}','property_object_detail');
        $modeler::model()->updateField('{}','output_object_detail');
		self::maintenance();
		return $modeler::model();
	}
    public static function deleteSequence($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        if(!SQDE_SequodeAuthority::isSequence()){return $modeler::model();}
        $modeler::model()->delete($modeler::model()->id);
        return $modeler::model();
    }
    public static function forgetCode($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        if(!SQDE_SequodeAuthority::isCode()){return $modeler::model();}
        //$modeler::model()->delete($modeler::model()->id);
        return $modeler::model();
    }
    public static function saveCode($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $filename = str_replace('::','--',str_replace(' ','_',$modeler::model()->name)).$modeler::model()->stub_file_extension;
        $save_directory = str_replace($modeler::model()->stub_file_extension,'',SQDE_FileManager::systemFilePath($modeler::model()->stub_file_extension));
        $code = SQDE_SequodesGenerator::makeSequodeFromModel($modeler::model());
        return SQDE_FileManager::saveFile($code, $save_directory . $filename);
    }
	public static function updateProcessDescriptionNode($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeSequodeProcessDescriptionNode()),'process_description_node');
        return $modeler::model();
    }
	public static function addToSequence($add__model_id, $position = 0, $position_tuner = null, $grid_modifier = null, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		if($position_tuner != null ){ $position_tuner = intval($position_tuner);}; 
		if($grid_modifier != null ){ $grid_modifier = intval($grid_modifier);}; 
		
		$sequence = json_decode($modeler::model()->sequence);
        $position = (count($sequence) == 0) ? 0 : SQDE_SequodesGenerator::getSequencePosition($position, $sequence, 1);
		
		$sequence_map = SQDE_SequodesGenerator::makeUpdateSequenceInputMap($sequence);
		$sequence_map = SQDE_SequodesGenerator::addToUpdateSequenceInputMap($sequence_map, $add__model_id, $position);
        if(count($sequence) == 0){
            SQDE_SequodesSequencer::updateSequence($sequence_map);
            return self::makeDefaultSequencedSequode();
        }else{
            $grid_areas = json_decode($modeler::model()->grid_areas);
            $grid_areas = SQDE_SequodesGenerator::addToGridArea($position, $grid_areas, $modeler::model());
            if(count($sequence) != 0){
                $grid_areas = SQDE_SequodesGenerator::tuneGridAreaPosition($position, $grid_areas, $position_tuner, $modeler::model());
            }
            SQDE_SequodesSequencer::updateSequence($sequence_map);
            $modeler::model()->updateField(json_encode($grid_areas),'grid_areas');
            if($grid_modifier > 0){
                $grid_areas = SQDE_SequodesGenerator::modifyGridAreas($position, $grid_areas, $modeler::model());
                $modeler::model()->updateField(json_encode($grid_areas),'grid_areas');
            }
            self::maintenance();
            return $modeler::model();
        }
    }
	public static function reorderSequence($from_position = 0, $to_position = 0, $position_tuner = null, $grid_modifier = null, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$sequence = json_decode($modeler::model()->sequence);
		$from_position = SQDE_SequodesGenerator::getSequencePosition($from_position, $sequence);
		$to_position = SQDE_SequodesGenerator::getSequencePosition($to_position, $sequence);
        $sequence_map = SQDE_SequodesGenerator::makeUpdateSequenceInputMap($sequence);
        $sequence_map = SQDE_SequodesGenerator::reorderUpdateSequenceInputMap($sequence_map ,$from_position, $to_position);
		$grid_areas = json_decode($modeler::model()->grid_areas);
		$grid_areas = SQDE_SequodesGenerator::moveFromGridAreaToGridArea($from_position, $to_position, $grid_areas, $modeler::model());
		$grid_areas = SQDE_SequodesGenerator::tuneGridAreaPosition($to_position, $grid_areas, $position_tuner, $modeler::model());
		SQDE_SequodesSequencer::updateSequence($sequence_map);
		$modeler::model()->updateField(json_encode($grid_areas),'grid_areas');
        if($grid_modifier > 0){
            $grid_areas = SQDE_SequodesGenerator::modifyGridAreas($to_position, $grid_areas, $modeler::model());
            $modeler::model()->updateField(json_encode($grid_areas),'grid_areas');
        }
        self::maintenance();
        return $modeler::model();
    }
	public static function removeFromSequence($position, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$sequence = json_decode($modeler::model()->sequence);
		$position = SQDE_SequodesGenerator::getSequencePosition($position, $sequence);
        $sequence_map = SQDE_SequodesGenerator::makeUpdateSequenceInputMap($sequence);
        $sequence_map = SQDE_SequodesGenerator::removeFromUpdateSequenceInputMap($sequence_map,$position);
		$grid_areas = json_decode($modeler::model()->grid_areas);
		$grid_areas = SQDE_SequodesGenerator::removeFromGridArea($position, $grid_areas, $modeler::model());
		SQDE_SequodesSequencer::updateSequence($sequence_map);
		$modeler::model()->updateField(json_encode($grid_areas),'grid_areas');
        self::maintenance();
		return $modeler::model();
    }
	public static function modifyGridAreas($position = 0, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$sequence = json_decode($modeler::model()->sequence);
		$position = SQDE_SequodesGenerator::getSequencePosition($position, $sequence, 1);
		$grid_areas = json_decode($modeler::model()->grid_areas);
		$grid_areas = SQDE_SequodesGenerator::modifyGridAreas($position, $grid_areas, $modeler::model());
		$modeler::model()->updateField(json_encode($grid_areas),'grid_areas');
        self::maintenance();
		return $modeler::model();
    }
	public static function emptySequence($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$modeler::model()->updateField('[]','sequence');
		self::makeDefaultSequencedSequode();
        return $modeler::model();
    }	
	public static function buildSequodeCodeNodeOffMineObject($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $mine_object = json_decode($modeler::model()->mine_object);
        $detail = (object) null;
        $detail->description = $mine_object->description;
        $printable_name = $mine_object->name;
        $input_object = (object) null;
        $last_key = false;
        foreach($mine_object->parameters as $key_2 => $object_2){
            if($object_2->name != ''){
                if($object_2->name == '...'){
                    if(is_numeric(substr($mine_object->parameters[$last_key]->name, -1, 1))){
                        $object_2->name = substr_replace($mine_object->parameters[$last_key]->name, "", -1).'_n';
                    }else{
                        $object_2->name = $mine_object->parameters[$last_key]->name.'_n';
                    }
                }
                $member = $object_2->name;
                $input_object->$member = $object_2->default_value;
            }
            $last_key = $key_2;
        }
        $property_object = (object) null;
        $property_object->Run_Process = false;
        $output_object = (object) null;
        $output_object->Success = false;
        if($mine_object->return_type != 'void' && $mine_object->return_type != ''){
            $member = $mine_object->return_type;
            $output_object->$member = null;
        }
        $input_object_detail = (object) null;
        foreach($mine_object->parameters as $key_2 => $object_2){
            if($object_2->name != ''){
                $member = $object_2->name;
                $input_object_detail->$member = SQDE_SequodesGenerator::makeProcessObjectDetailMember('input', $object_2->type ,$object_2->name, $object_2->default_value ,'str', $object_2->required);
            }
        }
        $property_object_detail = (object) null;
        $member = 'Run_Process';
        $property_object_detail->$member = SQDE_SequodesGenerator::makeDefaultProcessObjectDetailMember($member);
        $output_object_detail = (object) null;
        $member = 'Success';
        $output_object_detail->$member = SQDE_SequodesGenerator::makeDefaultProcessObjectDetailMember($member);
        if($mine_object->return_type != 'void' && $mine_object->return_type != ''){
            $member = $mine_object->return_type;
            $output_object_detail->$member = SQDE_SequodesGenerator::makeProcessObjectDetailMember('output', $mine_object->return_type ,$mine_object->return_type, null);
        }
        $modeler::model()->updateField(json_encode($detail),'detail');
        $modeler::model()->updateField(json_encode($input_object),'input_object');
        $modeler::model()->updateField(json_encode($property_object),'property_object');
        $modeler::model()->updateField(json_encode($output_object),'output_object');
        $modeler::model()->updateField(json_encode($input_object_detail),'input_object_detail');
        $modeler::model()->updateField(json_encode($property_object_detail),'property_object_detail');
        $modeler::model()->updateField(json_encode($output_object_detail),'output_object_detail');
        return $modeler::model();
    }
	public static function processCodedSequodeSetupData($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$detail = json_decode($modeler::model()->detail);
		$input_object_detail = json_decode($modeler::model()->input_object_detail);
		$property_object_detail = json_decode($modeler::model()->property_object_detail);
		$output_object_detail = json_decode($modeler::model()->output_object_detail);
		$input_object = json_decode($modeler::model()->input_object);
		$property_object = json_decode($modeler::model()->property_object);
		$output_object = json_decode($modeler::model()->output_object);
		
		$modeler::model()->updateField(json_encode($input_form_object),'input_form_object');
		$modeler::model()->updateField(json_encode($property_form_object),'property_form_object');
		$modeler::model()->updateField('[]','input_object_map');
		$modeler::model()->updateField('[]','property_object_map');
		$modeler::model()->updateField('[]','output_object_map');
		$modeler::model()->updateField('{}','process_description_node');
        $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::makeSequodeProcessDescriptionNode($modeler::model())),'process_description_node');
		return $modeler::model();
    }
	public static function moveGridArea($grid_area_key = 0, $x = 0, $y = 0, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $grid_area_key = intval($grid_area_key);
		$x = intval($x); 
		$y = intval($y);
        
        $grid_areas = json_decode($modeler::model()->grid_areas);
		if(!isset($grid_areas[$grid_area_key])){return $modeler::model();}
		$grid_areas = SQDE_SequodesGenerator::moveGridArea($grid_area_key, $grid_areas, $x, $y, $modeler::model());
		$modeler::model()->updateField(json_encode($grid_areas),'grid_areas');
        self::maintenance();
		return $modeler::model();
    }
    public static function updateValue($type = false, $map_key = 0, $value = null, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        if (intval($modeler::model()->usage_type) === 0){return false;}
        switch($type){
            case 'input':
                $stack = 'Inp_Obj';
                $object_map_member = 'input_object_map';
                $default_map_member = 'default_input_object_map';
                $object_detail_member = 'input_object_detail';
                break;
            case 'property':
                $stack = 'Prop_Obj';
                $object_map_member = 'property_object_map';
                $default_map_member = 'default_property_object_map';
                $object_detail_member = 'property_object_detail';
                break;
            default:
                return false;
        }
        
		
        $object_map = json_decode($modeler::model()->$object_map_member);
        $default_map = json_decode($modeler::model()->$default_map_member);
        $object_detail = json_decode($temp_model->$object_detail_member);
        if(!(intval($map_key > 0) && isset($default_map[$map_key]))){
            return $modeler::model();
        }
        $location_object = $default_map[$map_key];
        $run_maintenance = (empty($object_map[$map_key]->Value)) ? true : false;
        $temp_model = new $modeler::$model;
		$temp_model->exists($sequence[$location_object->Key - 1],'id');
        $member = $location_object->Member;
        $object_detail = json_decode($temp_model->$object_detail_member);
        $detail_member = $object_detail->$member;
        
        $object_map[$map_key]->Stack = $stack;
        $object_map[$map_key]->Key = $location_object->Key;
        $object_map[$map_key]->Member = $location_object->Member;
        /*
        $detail_member->type = $type;
        $detail_member->required = $required;
        $detail_member->default_value = $default_value;
        */
        switch($detail_member->type){
            case 'binary':
                $value = (binary) $value;
                break;
            case 'int':
            case 'integer':
                $value = (integer) $value;
                break;
            case 'bool':
            case 'boolean':
                $value = (boolean) $value;
                break;
            case 'float':
            case 'double':
            case 'real':
                $value = (float) $value;
                break;
            case 'array':
                $value = @json_decode($value,true);
                break;
            case 'object':
                $value = @json_decode($value);
                break;
        }
        $object_map[$map_key]->Value = $value;
        $modeler::model()->updateField(json_encode(SQDE_SequodesGenerator::removeKeys($object_map)),$object_map_member);
        if($run_maintenance){
            $modelerOperations::maintenance();
        }
        return $modeler::model();
    }
    public static function addInternalConnection($receiver_type = false, $transmitter_key = 0, $receiver_key = 0, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        if($receiver_key == 0 || $transmitter_key == 0){return $modeler::model();}
        if(intval($modeler::model()->usage_type) === 0 ){return $modeler::model();}
        switch($receiver_type){
            case 'input':
            case 'property':
                $object_member = $receiver_type . '_object';
                $object_map_member = $receiver_type . '_object_map';
                break;
            default:
                return $modeler::model();
        }
        
        $object_map = json_decode($modeler::model()->$object_map_member);
        $type_object = json_decode($modeler::model()->$object_member);
        $output_map = json_decode($modeler::model()->default_output_object_map);
        
        if(count($object_map) <= $receiver_key  ||  count($output_map) <= $transmitter_key ){
            return $modeler::model();
        }
        if( $object_map[$receiver_key]->Key <= $output_map[$transmitter_key]->Key){
            return $modeler::model();
        }
        $object_map[$receiver_key]->Stack = $output_map[$transmitter_key]->Stack;
        $object_map[$receiver_key]->Member = $output_map[$transmitter_key]->Member;
        $object_map[$receiver_key]->Key = $output_map[$transmitter_key]->Key;
        $object_map[$receiver_key]->Value = null;
       
        $modeler::model()->updateField(json_encode($object_map),$object_map_member);
        return self::maintenance();
    }
    public static function addExternalConnection($connection_type = false, $transmitter_key = 0, $receiver_key = 0, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        if(intval($modeler::model()->usage_type) === 0 ){return $modeler::model();}
        switch($connection_type){
            case 'input':
            case 'property':
            case 'output':
                $object_member = $connection_type . '_object';
                $object_map_member = $connection_type . '_object_map';
                $default_object_map_member = 'default_' . $connection_type . '_object_map';
                break;
            default:
                return $modeler::model();
        }
        
        $internal_key = ($connection_type == 'output') ? $transmitter_key : $receiver_key ;
        $external_key = ($connection_type == 'output') ? $receiver_key : $transmitter_key ;
        if($internal_key == 0){return $modeler::model();}
        
        $object_map = json_decode($modeler::model()->$object_map_member);
        $type_object = json_decode($modeler::model()->$object_member);
        $default_object_map = json_decode($modeler::model()->$default_object_map_member);
        if($external_key > count($type_object)){return $modeler::model();}
        
        if($external_key == 0){
            $external_member_name = SQDE_SequodesGenerator::makeUniqueMemberName($default_object_map[$internal_key]->Member, $object_map);
        }else{
            $i = 1;
            foreach($type_object as $member => $value){
                if($external_key == $i){
                     $external_member_name =  $member;
                    break;
                }
                $i++;
            }
        }
        $object_map[$internal_key]->Stack = $default_object_map[$internal_key]->Stack;
        $object_map[$internal_key]->Member = $external_member_name;
        $object_map[$internal_key]->Key = 0;
        $object_map[$internal_key]->Value = null;
        
        $modeler::model()->updateField(json_encode($object_map), $object_map_member);
        return $modelerOperations::maintenance();
    }
    public static function removeReceivingConnection($connection_type = false, $restore_key = 0, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        if(intval($modeler::model()->usage_type) === 0 ){return $modeler::model();}
        switch($connection_type){
            case 'input':
            case 'property':
            case 'output':
                $object_member = $connection_type . '_object';
                $object_map_member = $connection_type . '_object_map';
                $default_object_map_member = 'default_' . $connection_type . '_object_map';
                break;
            default:
                return $modeler::model();
        }
        if($restore_key == 0){return $modeler::model();}
        
        $object_map = json_decode($modeler::model()->$object_map_member);
        $type_object = json_decode($modeler::model()->$object_member);
        $default_object_map = json_decode($modeler::model()->$default_object_map_member);
        
        if($connection_type != 'output'){
            if(count($default_object_map) <= $restore_key){return $modeler::model();}
        }else{
            if(count($type_object) < $restore_key){return $modeler::model();}
            $i = 1;
            foreach($type_object as $member => $value){
                if($restore_key == $i){
                     $external_member_name =  $member;
                    break;
                }
                $i++;
            }
            foreach($object_map as $key => $map_location){
                if($map_location->Key == 0 && $map_location->Member == $external_member_name){
                    $restore_key =  $key;
                    break;
                }
            }
        }
        $object_map[$restore_key] = $default_object_map[$restore_key];
        
        $modeler::model()->updateField(json_encode($object_map), $object_map_member);
        return $modelerOperations::maintenance();
    }
	public static function autoSetTenancy($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$sequence = json_decode($modeler::model()->sequence);
        $safe = 1;
        $object_cache = array();
        foreach( $sequence as $key => $id ){
			if(!array_key_exists($id, $object_cache)){
				$object_cache[$id] = new $modeler::$model;
				$object_cache[$id]->exists($id,'id');
			}
			if($object_cache[$id]->safe == 0){ 
                $safe = 0;
                break;
            }
		}
        if(intval($modeler::model()->safe) != $safe){
            self::updateTenancy($safe, $_model);
        }
        return $modeler::model($_model);
    }
}