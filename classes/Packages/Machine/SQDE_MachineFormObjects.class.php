<?php
class SQDE_MachineFormObjects   {
    public static $objects_source = 'SQDE_MachineFormComponentObjects';
	public static $ajax_library = 'operations/machine';
    public static function name($sequode_model = null){
        if($machine_model != null ){ SQDE_Machine::model($machine_model); }
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$ajax_library,func_get_args());
        $form_object->auto_submit_time = 2000;
        $form_object->submit_ajax_call_parameters = array();
        $form_object->submit_ajax_call_route = static::$ajax_library.'/'.'updateName';
        $form_object->submit_ajax_call_parameters[] = SQDE_Machine::model()->id;
        $form_object->submit_ajax_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
    public static function search(){
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$ajax_library,func_get_args());
        $form_object->auto_submit_time = 1;
		return $form_object;
	}
}