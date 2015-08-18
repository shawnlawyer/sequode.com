<?php
class SQDE_SequodeOperationsXHR {
    public static function updateIndex($sequode_model_id){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::updateIndex();
		$js = array();
        $js[] = 'registry.fetch({collection:\'index\'});';
        $js[] = 'registry.fetch({collection:\'sequodes\', key:'.SQDE_Sequode::model()->id.'});';
			
		return SQDE_SequodeCardXHR::details($sequode_model_id);
    }
    public static function updateConnection($sequode_model_id, $from_object, $to_object){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id') 
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_Sequode::model(SQDE_SequodesSequencer::updateConnection(json_decode(stripslashes($from_object)), json_decode(stripslashes($to_object))));
		$js = array();
		$js[] = 'registry.fetch({collection:\'sequodes\', key:'.SQDE_Sequode::model()->id.'});';
		return implode(' ',$js);
    }
    public static function updateValue($type, $sequode_model_id, $map_key, $json){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        $input = json_decode($json);
        if (!is_object($input)){ return; }
        switch($type){
            case 'input':
            case 'property':
                $model_member = $type.'_object_map';
                break;
            default:
                return false;
        }
        $object_map = json_decode(SQDE_Sequode::model()->$model_member);
        SQDE_SequodeOperations::updateValue($type, $map_key, rawurldecode($input->location));
        
        if(empty($object_map[$map_key]->Value)){
			$js = array();
			$js[] = 'registry.fetch({collection:\'sequodes\', key:'.SQDE_Sequode::model()->id.'});';
			return implode(' ',$js);
        }
    }
    public static function updateComponentSettings($type, $member, $member_json, $sequode_model_id, $dom_id='FormsContainer'){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        $form_member_object = json_decode(stripslashes($member_json));
        if(!is_object($form_member_object)){return;}
        foreach($form_member_object as $key => $value){
            $form_member_object->$key = urldecode($value);
        }
        switch($type){
            case 'input':
            case 'property':
                $model_member = $type.'_form_object';
                break;
            default:
                return;
        }
        $previous_form_object = json_decode(SQDE_Sequode::model()->$model_member);
        SQDE_Sequode::model(SQDE_SequodeOperations::updateComponentSettings($type, $member, $form_member_object));
        $form_object = json_decode(SQDE_Sequode::model()->$model_member);
        if($previous_form_object->$member->Component != $form_member_object->Component){
            $js = array();
            $js[] = 'new SQDE_XHRCall({route:"forms/sequode/componentSettings",inputs:[\''.$type.'\', \''.$member.'\', '.SQDE_Sequode::model()->id.', \''.$dom_id.'\']});';
			return implode(' ',$js);
        }
    }
    public static function cloneSequence($sequode_model_id){
        if(!(
        SQDE_UserAuthority::canCreate()
        && SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canCopy()
        )){ return; }
        SQDE_Sequode::model(SQDE_SequodeOperations::makeSequenceCopy(SQDE_AuthenticatedUser::model()->id));
        $js = array();
        $js[] = 'registry.fetch({collection:\'sequodes\', key:'.SQDE_Sequode::model()->id.'});';
        $js[] = 'registry.active_collection = \'my\';';
        $js[] = 'registry.fetch({collection:\'my\'});';
		$js[] = SQDE_SequodeCardsXHR::details(SQDE_Sequode::model()->id);
        return implode(' ', $js);
    }
    public static function newSequence(){
        if(!(
        SQDE_UserAuthority::canCreate()
        )){ return; }
        SQDE_Sequode::model(SQDE_SequodeOperations::newSequence(SQDE_AuthenticatedUser::model()->id));
        $js = array();
        $js[] = 'registry.fetch({collection:\'sequodes\', key:'.SQDE_Sequode::model()->id.'});';
        $js[] = SQDE_SequodeCardsXHR::details(SQDE_Sequode::model()->id);
        return implode(' ', $js);
    }
    public static function updateName($sequode_model_id, $json){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        $input = json_decode($json);
        $name = trim(str_replace('-','_',str_replace(' ','_',urldecode($input->name))));
        if(strlen($name)==0){
            return ' alert(\'Name cannot be empty\');';
        }
        if(!eregi("^([A-Za-z0-9_])*$",$name)){
            return ' alert(\'Name can be alphanumeric and contain spaces only\');';
        }
        if(!SQDE_UserAuthority::canRename($name)){
            return ' alert(\'Name already exists\');';
        }
        SQDE_Sequode::exists($sequode_model_id,'id');
        SQDE_SequodeOperations::updateName($name);
        $js = array();
        $js[] = 'registry.fetch({collection:\'sequodes\', key:'.SQDE_Sequode::model()->id.'});';
		$js[] = SQDE_SequodeCardsXHR::details(SQDE_Sequode::model()->id);
        return implode(' ', $js);
        
        return;
    }
    public static function deleteSequence($sequode_model_id,$confirmed=false){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canDelete()
        )){ return; }
        $sequence = json_decode(SQDE_Sequode::model()->sequence);
        if ($confirmed===false && is_array($sequence) && count(json_decode(SQDE_Sequode::model()->sequence)) != 0){
            $js = array();
			$js[] = 'if(';
			$js[] = 'confirm(\'Are you sure you want to delete this?\')';
			$js[] = '){';
            $js[] = 'new SQDE_XHRCall({route:"operations/sequode/deleteSequence",inputs:['.SQDE_Sequode::model()->id.', true]});';
			$js[] = '}';
			return implode(' ',$js);
        }else{
            SQDE_SequodeOperations::deleteSequence();
            $js = array();
            //$js[] = 'registry.active_collection = \'my\';';
            $js[] = 'registry.fetch({collection:\'my\'});';
            $js[] = 'registry.fetch({collection:\'palette\'});';
            $js[] = 'registry.fetch({collection:\'sequodes\', key:'.SQDE_Sequode::model()->id.'});';
            $js[] = SQDE_SequodeCardsXHR::my();
            return implode(' ', $js);
        }
    }
    public static function formatSequence($sequode_model_id,$confirmed=false){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        $js = array();
        if ($confirmed===false){
			$js[] = 'if(';
			$js[] = 'confirm(\'Are you sure you want to format '.SQDE_Sequode::model()->id.'?\')';
			$js[] = '){';
            $js[] = 'new SQDE_XHRCall({route:"operations/sequode/formatSequence",inputs:['.SQDE_Sequode::model()->id.', true]});';
			$js[] = '}';
        }else{
            SQDE_SequodeOperations::makeDefaultSequencedSequode();
            $js[] = 'registry.fetch({collection:\'sequodes\', key:'.SQDE_Sequode::model()->id.'});';
            $js[] = 'if(typeof registry.active_context != \'undefined\' && typeof registry.active_context.card != \'undefined\'){';
            $js[] = 'new SQDE_XHRCall({route:registry.active_context.card, inputs:['.SQDE_Sequode::model()->id.']});';
            $js[] = '}';
        }
        return implode(' ',$js);
    }
    public static function search($search_json){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        $search_object = json_decode(stripslashes($search_json));
        if(!is_object($search_object) || (trim($search_object->search) == '' || empty(trim($search_object->search)))){
            SQDE_Session::set('sequode_search', '{}');
        }else{
            SQDE_Session::set('sequode_search', stripslashes($search_json));
        }
		$js=array();
        if(SQDE_Session::get('palette') == 'sequode_search'){
            $js[] = 'registry.fetch({collection:\'palette\'});';
        }
        $js[] = 'registry.fetch({collection:\'sequode_search\'});';
        $js[] = 'registry.active_collection = \'sequode_search\';';
        
        return implode(' ',$js);
    }
	public static function addToSequence($sequode_model_id, $add_sequode_model_id, $position=0, $position_tuner = null, $grid_modifier = null){
        if(!(
		SQDE_Sequode::exists($add_sequode_model_id,'id')
		&& SQDE_UserAuthority::canRun()
		&& SQDE_Sequode::exists($sequode_model_id,'id')
		&& SQDE_UserAuthority::canEdit()
        && SQDE_SequodeAuthority::isSequence()
        && !SQDE_SequodeAuthority::isFullSequence()
		)){ return; }
        SQDE_SequodeOperations::addToSequence($add_sequode_model_id, $position, $position_tuner, $grid_modifier);
		return;
	}
	public static function reorderSequence($sequode_model_id, $from_position=0, $to_position=0, $position_tuner = null, $grid_modifier = null){
        if(!(
		SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
		&& SQDE_UserAuthority::canEdit()
		)){ return; }
        SQDE_SequodeOperations::reorderSequence($from_position, $to_position, $position_tuner, $grid_modifier);
		return;
	}
	public static function removeFromSequence($sequode_model_id, $position){
        if(!(
		SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
		&& SQDE_UserAuthority::canEdit()
		)){ return; }
        SQDE_SequodeOperations::removeFromSequence($position);
		return;
	}
	public static function modifyGridAreas($sequode_model_id, $position){
        if(!(
		SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
		&& SQDE_UserAuthority::canEdit()
		)){ return; }
        SQDE_SequodeOperations::modifyGridAreas($position);
		return;
	}
	public static function emptySequence($sequode_model_id){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::emptySequence();
        $js[] = 'registry.fetch({collection:\'sequodes\', key:'.SQDE_Sequode::model()->id.'});';
        $js[] = 'if(registry.active_context != false && registry.active_context.card != \'\' && registry.active_context.node != \'\'){';
        $js[] = 'new SQDE_XHRCall({route:registry.active_context.card, inputs:[registry.active_context.node]});';
        $js[] = '}';
        return implode('',$js);
	}
	public static function moveGridArea($sequode_model_id, $grid_area_key = 0, $x = 0, $y = 0){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::moveGridArea($grid_area_key, $x, $y);
		return;
	}
	public static function addInternalConnection($sequode_model_id, $receiver_type = false, $transmitter_key = 0, $receiver_key = 0){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::addInternalConnection($receiver_type, $transmitter_key, $receiver_key);
		return;
	}
	public static function addExternalConnection($sequode_model_id, $receiver_type = false, $transmitter_key = 0, $receiver_key = 0){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::addExternalConnection($receiver_type, $transmitter_key, $receiver_key);
		return;
	}
	public static function removeReceivingConnection($sequode_model_id, $connection_type = false, $restore_key = 0){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_SequodeAuthority::isSequence()
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        SQDE_SequodeOperations::removeReceivingConnection($connection_type, $restore_key);
		return;
	}
	public static function updateTenancy($sequode_model_id,$json){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::isSystemOwner()
        )){ return; }
        $input = json_decode($json);
        if (!is_object($input)){ return; }
        SQDE_SequodeOperations::updateTenancy(rawurldecode($input->tenancy));
		return;
	}
	public static function updateSharing($sequode_model_id,$json){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canShare()
        )){ return; }
        $input = json_decode($json);
        if (!is_object($input)){ return; }
        SQDE_SequodeOperations::updateSharing(rawurldecode($input->sharing));
		return;
	}
	public static function updateIsPalette($sequode_model_id,$json){
        if(!(
            SQDE_Sequode::exists($sequode_model_id,'id')
            && SQDE_UserAuthority::canEdit()
        )){return;}
        $input = json_decode($json);
        if (!is_object($input)){ return; }
        SQDE_SequodeOperations::updateIsPalette(rawurldecode($input->palette));
		return;
	}
	public static function updateIsPackage($sequode_model_id,$json){
        if(!(
            SQDE_Sequode::exists($sequode_model_id,'id')
            && SQDE_UserAuthority::canEdit()
        )){return;}
        $input = json_decode($json);
        if (!is_object($input)){ return; }
        SQDE_SequodeOperations::updateIsPackage(rawurldecode($input->package));
		return;
	}
	public static function updateDescription($sequode_model_id, $json){
        if(!(
        SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        $input = json_decode($json);
        if (!is_object($input)){ return; }
        SQDE_SequodeOperations::updateDescription(rawurldecode($input->description));
		return;
	}
}