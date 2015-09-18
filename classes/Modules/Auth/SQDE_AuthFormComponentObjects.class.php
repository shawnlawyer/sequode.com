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
    public static function login(){
        $_o = (object) null;
        
        SQDE_Component::exists('str','name');
        $_o->login = json_decode(SQDE_Component::model()->component_object);
        $_o->login->Label = '';
        $_o->login->Value = '';
        $_o->login->Width = 200;
        $_o->login->CSS_Class = 'focus-input';
        
		return $_o;
	}
    public static function secret(){
        $_o = (object) null;
        
        SQDE_Component::exists('password','name');
		$_o->secret = json_decode(SQDE_Component::model()->component_object);
        $_o->secret->Label = '';
        $_o->secret->Value = '';
        $_o->secret->Width = 200;
        $_o->secret->CSS_Class = 'focus-input';
        
		return $_o;
	}
}