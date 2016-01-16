<?php
class SQDE_SequodeFormComponentObjects   {
    public static function name($sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        
        $components_object = (object) null;
        
        \Sequode\Component\FormInput\FormInput::exists('str','name');
        $components_object->name = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->name->Label = '';
        $components_object->name->Value = SQDE_Sequode::model()->name;
        $components_object->name->Width = 200;
        $components_object->name->CSS_Class = 'focus-input';
        
		return $components_object;
        
	}
    public static function description($sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        
        $components_object = (object) null;
        
        \Sequode\Component\FormInput\FormInput::exists('text','name');
        $components_object->description = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->description->Label = '';
        $components_object->description->Value = @json_decode(SQDE_Sequode::model()->detail)->description;
        $components_object->description->Width = 30;
        $components_object->description->Height = 20;
        $components_object->description->CSS_Class = 'focus-input';
        
		return $components_object;
        
	}
    public static function search(){
        
        $components_object = (object) null;
        
        \Sequode\Component\FormInput\FormInput::exists('str','name');
        $components_object->search = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->search->Label = '';
        $components_object->search->Value = '';
        $components_object->search->Width = 200;
        $components_object->search->CSS_Class = 'search-sequodes-input';
        
        \Sequode\Component\FormInput\FormInput::exists('select','name');
        $components_object->position = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->position->Label = '';
        $components_object->position->Values = "[{'value':'=%','printable':'Starts With'},{'value':'%=%','printable':'Contains'},{'value':'%=','printable':'Ends With'},{'value':'=','printable':'Exact'}]";
        $components_object->position->Value = '=%';
        $components_object->position->Value_Key = 'value';
        $components_object->position->Printable_Key = 'printable';
        
        \Sequode\Component\FormInput\FormInput::exists('checkboxSwitch','name');
        $components_object->coded = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->coded->Label = '';
        $components_object->coded->On_Text = 'Coded';
        $components_object->coded->On_Value = 1;
        $components_object->coded->Off_Text = 'Coded';
        $components_object->coded->Off_Value = 0;
        $components_object->coded->Value = 1;
        
        $components_object->sequenced = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->sequenced->Label = '';
        $components_object->sequenced->On_Text = 'Sequenced';
        $components_object->sequenced->On_Value = 1;
        $components_object->sequenced->Off_Text = 'Sequenced';
        $components_object->sequenced->Off_Value = 0;
        $components_object->sequenced->Value = 1;
        
        $components_object->my_sequodes = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->my_sequodes->Label = '';
        $components_object->my_sequodes->On_Text = 'My Sequodes';
        $components_object->my_sequodes->On_Value = 1;
        $components_object->my_sequodes->Off_Text = 'My Sequodes';
        $components_object->my_sequodes->Off_Value = 0;
        $components_object->my_sequodes->Value = 1;
        
        $components_object->shared_sequodes = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->shared_sequodes->Label = '';
        $components_object->shared_sequodes->On_Text = 'Shared Sequodes';
        $components_object->shared_sequodes->On_Value = 1;
        $components_object->shared_sequodes->Off_Text = 'Shared Sequodes';
        $components_object->shared_sequodes->Off_Value = 0;
        $components_object->shared_sequodes->Value = 1;
        
		return $components_object;
	}
    public static function component($type, $map_key, $sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        $default_map = SQDE_SequodeOperationsKit::makeDefaultSequenceObjectMap($type,$sequode_model);
        $sequence =  json_decode(SQDE_Sequode::model()->sequence);
        $location_object = $default_map[$map_key];
		$sequence_key = $location_object->Key - 1;
        $member = $location_object->Member;
        $temp_model = new SQDE_Sequode::$model;
		$temp_model->exists($sequence[$sequence_key],'id');
		$components_object = (object) null;
		$model_member = $type.'_form_object';
		$components_object->location = json_decode($temp_model->$model_member)->$member;
		$model_member = $type.'_object_map';
		$components_object->location->Value = json_decode(SQDE_Sequode::model()->$model_member)[$map_key]->Value;
		return $components_object;
    }
	public static function componentSettings($type, $member, $dom_id, $sequode_model = null){
        if($sequode_model == null ){ $sequode_model = SQDE_Sequode::model(); }
        $components_object = (object) null;
        switch($type){
                case 'input':
                case 'property':
                    $model_member = $type.'_form_object';
                    $values_object = json_decode($sequode_model->$model_member)->$member;
                    break;
            default:
                return;
        }
		
		\Sequode\Component\FormInput\FormInput::exists($values_object->Component,'name');
		$components_object = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_form_object);
		foreach($components_object as $component_member => $component_object){
			if(isset($values_object->$component_member)){
				$components_object->$component_member->Value = $values_object->$component_member;
			}
		}
		return $components_object;
	}
    public static function sequode($dom_id, $sequode_model = null){
        if($sequode_model == null ){ $sequode_model = SQDE_Sequode::model(); }
        return json_decode($sequode_model->input_form_object);
	}
    public static function tenancy($sequode_model = null){
        if($sequode_model == null ){ $sequode_model = SQDE_Sequode::model(); }
        $components_object = (object) null;
        \Sequode\Component\FormInput\FormInput::exists('checkboxSwitch','name');
        $components_object->sharing = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->sharing->Label = '';
        $components_object->sharing->On_Text = 'Dedicated Tenancy';
        $components_object->sharing->On_Value = 1;
        $components_object->sharing->Off_Text = 'Shared Tenancy';
        $components_object->sharing->Off_Value = 0;
        $components_object->sharing->Value = (SQDE_SequodeAuthority::isTenacyDedicated($sequode_model)) ? 0 : 1;
		return $components_object;
	}
    public static function sharing($sequode_model = null){
        if($sequode_model == null ){ $sequode_model = SQDE_Sequode::model(); }
        $components_object = (object) null;
        \Sequode\Component\FormInput\FormInput::exists('checkboxSwitch','name');
        $components_object->sharing = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->sharing->Label = '';
        $components_object->sharing->On_Text = 'Publicly Shared';
        $components_object->sharing->On_Value = 1;
        $components_object->sharing->Off_Text = 'Private Restricted';
        $components_object->sharing->Off_Value = 0;
        $components_object->sharing->Value = (SQDE_SequodeAuthority::isShared($sequode_model)) ? 1 : 0;
		return $components_object;
	}
    public static function updateIsPalette($sequode_model = null){
        if($sequode_model == null ){ $sequode_model = SQDE_Sequode::model(); }
        $components_object = (object) null;
        \Sequode\Component\FormInput\FormInput::exists('checkboxSwitch','name');
        $components_object->palette = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->palette->Label = '';
        $components_object->palette->On_Text = 'Shown in Palettes';
        $components_object->palette->On_Value = 1;
        $components_object->palette->Off_Text = 'Hidden from Palettes';
        $components_object->palette->Off_Value = 0;
        $components_object->palette->Value = (SQDE_SequodeAuthority::isPalette($sequode_model)) ? 1 : 0;
		return $components_object;
	}
    public static function updateIsPackage($sequode_model = null){
        if($sequode_model == null ){ $sequode_model = SQDE_Sequode::model(); }
        $components_object = (object) null;
        \Sequode\Component\FormInput\FormInput::exists('checkboxSwitch','name');
        $components_object->package = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->package->Label = '';
        $components_object->package->On_Text = 'Useable As Package';
        $components_object->package->On_Value = 1;
        $components_object->package->Off_Text = 'Not Used As Package';
        $components_object->package->Off_Value = 0;
        $components_object->package->Value = (SQDE_SequodeAuthority::isPackage($sequode_model)) ? 1 : 0;
		return $components_object;
	}
    public static function selectPalette($user_model = null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $components_object = (object) null;
        $values = $where = array();
        
        $values[] = '{\'value\':\'0\',\'printable\':\'Select Sequodes Palette\'}';
        //$values[] = '{\'value\':\'sequode_search\',\'printable\':\'Sequode Search Results\'}';
        $values[] = '{\'value\':\'sequode_favorites\',\'printable\':\'My Sequode Favorites\'}';
        
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>5);
        $where[] = array('field'=>'shared','operator'=>'=','value'=>1);
        $where[] = array('field'=>'palette','operator'=>'=','value'=>1);
        $sequodes_model = new SQDE_Sequodes;
        $sequodes_model->getAll($where);
        foreach( $sequodes_model->all as $object){
            $values[] = '{\'value\':\''.$object->id.'\',\'printable\':\''.$object->name.'\'}';
        }
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
        $where[] = array('field'=>'palette','operator'=>'=','value'=>1);
        $sequodes_model->getAll($where);
        foreach( $sequodes_model->all as $object){
            $values[] = '{\'value\':\''.$object->id.'\',\'printable\':\''.$object->name.'\'}';
        }
        \Sequode\Component\FormInput\FormInput::exists('select','name');
        $components_object->palette = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $components_object->palette->Label = '';
        $components_object->palette->Values = '[' . implode(',',$values) . ']';
        $components_object->palette->Value = '0';
        $components_object->palette->Value_Key = 'value';
        $components_object->palette->Printable_Key = 'printable';
        
		return $components_object;
	}
}