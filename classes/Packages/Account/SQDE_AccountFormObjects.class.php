<?php
class SQDE_AccountFormObjects   {
	public static $objects_source = 'SQDE_AccountFormComponentObjects';
	public static $ajax_library = 'operations/account';
    public static function updateDomain(){
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$ajax_library,func_get_args());
        $form_object->submit_button = 'Save';
		return $form_object;
	}
    public static function updateEmail(){
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$ajax_library,func_get_args());
        $form_object->submit_button = 'Save';
		return $form_object;
	}
    public static function updatePassword(){
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$ajax_library,func_get_args());
        $form_object->submit_button = 'Save';
		return $form_object;
	}
}