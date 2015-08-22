<?php
class SQDE_PackageFormObjects   {
    public static $objects_source = 'SQDE_PackageFormComponentObjects';
	public static $xhr_library = 'operations/package';
    public static function name($_model = null){
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 2000;
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_route = static::$xhr_library.'/'.'updateName';
        $form_object->submit_xhr_call_parameters[] = SQDE_Package::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
    public static function search(){
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
		return $form_object;
	}
}