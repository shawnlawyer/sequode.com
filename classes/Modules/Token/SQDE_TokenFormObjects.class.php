<?php
class SQDE_TokenFormObjects   {
    public static $package = 'Token';
    public static $objects_source = 'SQDE_TokenFormComponentObjects';
	public static $xhr_library = 'operations/token';
    public static function name(){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$_o = Sequode\Component\Form\Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->auto_submit_time = 2000;
        $_o->submit_xhr_call_parameters = array();
        $_o->submit_xhr_call_route = static::$xhr_library.'/'.'updateName';
        $_o->submit_xhr_call_parameters[] = $modeler::model()->id;
        $_o->submit_xhr_call_parameters[] = Sequode\Component\Form\Form::$collection_replacement_hook;
		return $_o;
	}
    public static function search(){
        $_o = Sequode\Component\Form\Form::formObject(static::$objects_source, __FUNCTION__, static::$xhr_library, func_get_args());
        $_o->auto_submit_time = 1;
		return $_o;
	}
}