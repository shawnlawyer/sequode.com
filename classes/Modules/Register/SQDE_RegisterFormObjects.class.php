<?php
class SQDE_RegisterFormObjects   {
    public static $package = 'Register';
	public static $objects_source = 'SQDE_RegisterFormComponentObjects';
	public static $xhr_library = 'operations/register';
    public static function signup(){
        $form_object = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $form_object->submit_button = 'Submit';
		return $form_object;
	}
	public static function terms(){
        $form_object = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
		return $form_object;
	}
	public static function acceptTerms(){
        $form_object = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $form_object->submit_xhr_call_route = static::$xhr_library.'/'.'guest';
        $form_object->submit_button = 'Submit';
		return $form_object;
	}
}