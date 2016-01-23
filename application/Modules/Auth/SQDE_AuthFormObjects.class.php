<?php
class SQDE_AuthFormObjects   {
    public static $package = 'Auth';
	public static $objects_source = 'SQDE_AuthFormComponentObjects';
	public static $xhr_library = 'operations/auth';
	public static function login(){
        $_o = Sequode\Component\Form\Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'login';
        $_o->submit_button = 'Next';
		return $_o;
	}
    public static function secret(){
        $_o = Sequode\Component\Form\Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'login';
        $_o->submit_button = 'Next';
		return $_o;
	}
}