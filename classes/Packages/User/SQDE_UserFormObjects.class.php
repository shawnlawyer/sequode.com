<?php
class SQDE_UserFormObjects   {
    public static $package = 'User';
	public static $objects_source = 'SQDE_UserFormComponentObjects';
	public static $xhr_library = 'operations/user';
    public static function updateDomain($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $modeler::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
        $form_object->submit_button = 'Save';
		return $form_object;
	}
    public static function updateEmail($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $modeler::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
        $form_object->submit_button = 'Save';
		return $form_object;
	}
    public static function updatePassword($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $modeler::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
        $form_object->submit_button = 'Save';
		return $form_object;
	}
    public static function search($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
		return $form_object;
	}
    public static function updateRole($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $modeler::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
    public static function updateActive($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $modeler::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;;
		return $form_object;
	}
    
    public static function updateName($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 2000;
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $modeler::model()->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
}