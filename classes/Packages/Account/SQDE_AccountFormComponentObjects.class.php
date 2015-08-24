<?php
class SQDE_AccountFormComponentObjects{
    public static $package = 'Account';
    public static $modeler = 'SQDE_AuthenticatedUser';
    public static function updateEmail($_model = null){
        $_model = ($_model == null ) ? forward_static_call_array(array(self::$modeler,'model'),array()) : $_model;
        $_o = (object) null;
        
        SQDE_Component::exists('str','name');
		$_o->email = json_decode(SQDE_Component::model()->component_object);
        $_o->email->Label = 'Email';
        $_o->email->Value = $_model->email;
        $_o->email->Width = 200;
        
        SQDE_Component::exists('password','name');
		$_o->password = json_decode(SQDE_Component::model()->component_object);
        $_o->password->Label = 'Password';
        $_o->password->Value = '';
        $_o->password->Width = 200;
        $_o->password->CSS_Class = 'focus-input';
        
		return $_o;
	}
    public static function updatePassword(){
        
        SQDE_Component::exists('password','name');
		$_o->password = json_decode(SQDE_Component::model()->component_object);
        $_o->password->Label = 'Current Password';
        $_o->password->Value = '';
        $_o->password->Width = 200;
        $_o->password->CSS_Class = 'focus-input';
        
		$_o->new_password = json_decode(SQDE_Component::model()->component_object);
        $_o->new_password->Label = 'New Password';
        $_o->new_password->Value = '';
        $_o->new_password->Width = 200;
        
		$_o->confirm_password = json_decode(SQDE_Component::model()->component_object);
        $_o->confirm_password->Label = 'Confirm Password';
        $_o->confirm_password->Value = '';
        $_o->confirm_password->Width = 200;
        
		return $_o;
	}
}