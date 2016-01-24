<?php
class SQDE_AccountFormObjects   {
	public static $objects_source = 'SQDE_AccountFormComponentObjects';
	public static $xhr_library = 'operations/account';
    public static function updateEmail(){
        $_o = Sequode\Component\Form\Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'updateEmail';
        $_o->submit_button = 'Next';
		return $_o;
	}
    public static function verify(){
        $_o = Sequode\Component\Form\Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'updateEmail';
        $_o->submit_button = 'Next';
		return $_o;
	}
    public static function updatePassword(){
        $_o = Sequode\Component\Form\Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'updatePassword';
        $_o->submit_button = 'Next';
		return $_o;
	}
    public static function password(){
        $_o = Sequode\Component\Form\Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'updatePassword';
        $_o->submit_button = 'Next';
		return $_o;
	}
}