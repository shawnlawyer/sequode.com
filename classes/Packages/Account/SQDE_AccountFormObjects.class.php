<?php
class SQDE_AccountFormObjects   {
	public static $objects_source = 'SQDE_AccountFormComponentObjects';
	public static $xhr_library = 'operations/account';
    public static function updateEmail(){
        $_o = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $_o->submit_button = 'Save';
		return $_o;
	}
    public static function updatePassword(){
        $_o = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $_o->submit_button = 'Save';
		return $_o;
	}
}