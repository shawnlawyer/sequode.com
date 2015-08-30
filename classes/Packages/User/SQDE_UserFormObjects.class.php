<?php
class SQDE_UserFormObjects   {
    public static $package = 'User';
	public static $objects_source = 'SQDE_UserFormComponentObjects';
	public static $xhr_library = 'operations/users';
    public static function updateDomain($user_model = null){
        if($user_model == null){ $user_model = SQDE_User::model(); }
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $user_model->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
        $form_object->submit_button = 'Save';
		return $form_object;
	}
    public static function updateEmail($user_model = null){
        if($user_model == null){ $user_model = SQDE_User::model(); }
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $user_model->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
        $form_object->submit_button = 'Save';
		return $form_object;
	}
    public static function updatePassword($user_model = null){
        if($user_model == null){ $user_model = SQDE_User::model(); }
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $user_model->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
        $form_object->submit_button = 'Save';
		return $form_object;
	}
    public static function search($user_model = null){
        if($user_model == null){ $user_model = SQDE_User::model(); }
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
		return $form_object;
	}
    public static function updateRole($user_model = null){
        if($user_model == null){ $user_model = SQDE_User::model(); }
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $user_model->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
    public static function updateActive($user_model = null){
        if($user_model == null){ $user_model = SQDE_User::model(); }
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $user_model->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;;
		return $form_object;
	}
    
    public static function updateName($user_model = null){
        if($user_model == null){ $user_model = SQDE_User::model(); }
		$form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 2000;
        $form_object->submit_xhr_call_parameters = array();
        $form_object->submit_xhr_call_parameters[] = $user_model->id;
        $form_object->submit_xhr_call_parameters[] = SQDE_Form::$collection_replacement_hook;
		return $form_object;
	}
}