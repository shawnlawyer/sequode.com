<?php
class SQDE_PackageFormObjects   {
    public static $objects_source = 'SQDE_PackageFormComponentObjects';
	public static $xhr_library = 'operations/package';
    public static function name($_model = null){
		$_o = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->auto_submit_time = 2000;
        $_o->submit_xhr_call_parameters = array();
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'updateName';
        $_o->submit_xhr_call_parameters[] = SQDE_Package::model()->id;
        $_o->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $_o;
	}
    public static function packageSequode($_model = null){
		$_o = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->auto_submit_time = 1;
        $_o->submit_xhr_call_parameters = array();
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'updatePackageSequode';
        $_o->submit_xhr_call_parameters[] = SQDE_Package::model()->id;
        $_o->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $_o;
	}
    public static function search(){
        $_o = SQDE_Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->auto_submit_time = 1;
		return $_o;
	}
}