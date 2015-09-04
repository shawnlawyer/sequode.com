<?php
class SQDE_SessionFormObjects   {
	public static $objects_source = 'SQDE_SessionFormComponentObjects';
	public static $xhr_library = 'operations/session';
    public static function search(){
        $_o = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->auto_submit_time = 1;
		return $_o;
	}
}