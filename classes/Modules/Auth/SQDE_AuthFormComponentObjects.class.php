<?php
class SQDE_AuthFormComponentObjects   {
    public static $package = 'Auth';
    public static function login(){
        $components_object = (object) null;
        
        SQDE_Component::exists('str','name');
        $components_object->username = json_decode(SQDE_Component::model()->component_object);
        $components_object->username->Label = 'Username';
        $components_object->username->Value = '';
        $components_object->username->Width = 200;
        $components_object->username->CSS_Class = 'focus-input';
        
        SQDE_Component::exists('password','name');
		$components_object->password = json_decode(SQDE_Component::model()->component_object);
        $components_object->password->Label = 'Password';
        $components_object->password->Value = '';
        $components_object->password->Width = 200;
        
		return $components_object;
	}
}