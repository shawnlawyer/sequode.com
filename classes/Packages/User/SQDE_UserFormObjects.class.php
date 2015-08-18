<?php
class SQDE_UserFormObjects   {
	public static $objects_source = 'SQDE_UserFormComponentObjects';
	public static $xhr_library = 'operations/user';
    public static function selectPalette(){
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$xhr_library,func_get_args());
        $form_object->auto_submit_time = 1;
		return $form_object;
	}
}