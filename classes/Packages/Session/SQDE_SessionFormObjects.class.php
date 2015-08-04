<?php
class SQDE_SessionFormObjects   {
	public static $objects_source = 'SQDE_SessionFormComponentObjects';
	public static $ajax_library = 'operations/session';
    public static function search(){
        $form_object = SQDE_Form::formObject(static::$objects_source,__FUNCTION__,static::$ajax_library,func_get_args());
        $form_object->auto_submit_time = 1;
		return $form_object;
	}
}