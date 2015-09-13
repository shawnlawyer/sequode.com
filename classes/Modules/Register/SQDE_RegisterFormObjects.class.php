<?php
class SQDE_RegisterFormObjects   {
    public static $package = 'Register';
	public static $objects_source = 'SQDE_RegisterFormComponentObjects';
	public static $xhr_library = 'operations/register';
    public static function email(){
        $_o = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'signup';
        $_o->submit_button = 'Submit';
		return $_o;
	}
    public static function password(){
        $_o = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'signup';
        $_o->submit_button = 'Submit';
		return $_o;
	}
    public static function verify(){
        $_o = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'signup';
        $_o->submit_button = 'Submit';
		return $_o;
	}
	public static function terms(){
        $_o = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
		return $_o;
	}
	public static function acceptTerms(){
        $_o = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'signup';
        $_o->submit_button = 'Submit';
		return $_o;
	}
    public static function username(){
        $_o = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'signup';
        $_o->submit_button = 'Submit';
		return $_o;
	}
}