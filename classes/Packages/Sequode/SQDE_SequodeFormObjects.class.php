<?php
class SQDE_SequodeFormObjects   {
    public static $objects_source = 'SQDE_SequodeFormComponentObjects';
	public static $xhr_library = 'operations/sequode';
    public static function name($sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 2000;
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_route = static::$xhr_library.'/'.'updateName';
        $form_object->submit_xhr_call_parameters[] = SQDE_Sequode::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
    public static function description($sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 2000;
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_route = static::$xhr_library.'/'.'updateDescription';
        $form_object->submit_xhr_call_parameters[] = SQDE_Sequode::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
    public static function search(){
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
		return $form_object;
	}
    public static function component($type, $map_key, $sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }        
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 500;
        $form_object->submit_on_enter = false;
        $form_object->submit_xhr_call_route = static::$xhr_library.'/'.'updateValue';
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::jsQuotedValue($type);
        $form_object->submit_xhr_call_parameters[] = SQDE_Sequode::model()->id;
        $form_object->submit_xhr_call_parameters[] = $map_key;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
	public static function componentSettings($type, $member, $dom_id, $sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }        
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
        $form_object->submit_xhr_call_route = static::$xhr_library.'/'.'updateComponentSettings';
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::jsQuotedValue($type);
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::jsQuotedValue($member);
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
        $form_object->submit_xhr_call_parameters[] = SQDE_Sequode::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::jsQuotedValue($dom_id);
		return $form_object;
	}
    public static function sequode($dom_id, $sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }     
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->submit_xhr_call_route = static::$xhr_library.'/'.'run';
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = SQDE_Sequode::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		$form_object->submit_button = SQDE_Sequode::model()->name;
		return $form_object;
	}
    public static function tenancy($sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
        $form_object->submit_xhr_call_route = static::$xhr_library.'/'.'updateTenancy';
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = SQDE_Sequode::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
    public static function sharing($sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }     
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
        $form_object->submit_xhr_call_route = static::$xhr_library.'/'.'updateSharing';
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = SQDE_Sequode::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
    public static function updateIsPalette($sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }     
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
        $form_object->submit_xhr_call_route = static::$xhr_library.'/'.'updateIsPalette';
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = SQDE_Sequode::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
    public static function updateIsPackage($sequode_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }     
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
        $form_object->submit_xhr_call_route = static::$xhr_library.'/'.'updateIsPackage';
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = SQDE_Sequode::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
}