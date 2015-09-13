<?php
class SQDE_RegisterFormComponentObjects   {
    public static $package = 'Register';
    
    public static function email(){
        $_o = (object) null;
        
        SQDE_Component::exists('str','name');
        $_o->email = json_decode(SQDE_Component::model()->component_object);
        $_o->email->Label = 'Email Address';
        $_o->email->Value = '';
        $_o->email->Width = 200;
        
		return $_o;
	}
    public static function verify(){
        $_o = (object) null;
        
        SQDE_Component::exists('str','name');
        $_o->token = json_decode(SQDE_Component::model()->component_object);
        $_o->token->Label = 'Token';
        $_o->token->Value = '';
        $_o->token->Width = 200;
        $_o->token->CSS_Class = 'focus-input';
        
		return $_o;
	}
    public static function acceptTerms($_model = null){
        if($_model == null ){ $_model = SQDE_User::model($_model); }
        $_o = (object) null;
        
        SQDE_Component::exists('checkboxSwitch','name');
        $_o->accept = json_decode(SQDE_Component::model()->component_object);
        $_o->accept->Label = '';
        $_o->accept->On_Text = 'I Accept';
        $_o->accept->On_Value = 1;
        $_o->accept->Off_Text = 'I Accept';
        $_o->accept->Off_Value = 0;
        $_o->accept->Value = 0;
        $_o->accept->CSS_Class = 'focus-input';
        
		return $_o;
	}
    public static function terms($_model = null){
        if($_model == null ){ $_model = SQDE_User::model($_model); }
        $_o = (object) null;
        
        SQDE_Component::exists('text','name');
        $_o->terms = json_decode(SQDE_Component::model()->component_object);
        $_o->terms->Label = 'Terms & Conditions of Use';
        $_o->terms->Value = strip_tags(file_get_contents('terms-conditions.txt',true));
        $_o->terms->Width = 23;
        $_o->terms->Height = 18;
        $_o->terms->CSS_Class = 'focus-input';
        
		return $_o;
	}
    public static function username(){
        $_o = (object) null;
        
        SQDE_Component::exists('str','name');
        $_o->username = json_decode(SQDE_Component::model()->component_object);
        $_o->username->Label = 'Username';
        $_o->username->Value = '';
        $_o->username->Width = 200;
        $_o->username->CSS_Class = 'focus-input';
        
		return $_o;
	}
    public static function password(){
        $_o = (object) null;
        
        SQDE_Component::exists('password','name');
		$_o->password = json_decode(SQDE_Component::model()->component_object);
        $_o->password->Label = 'Password';
        $_o->password->Value = '';
        $_o->password->Width = 200;
        
        SQDE_Component::exists('password','name');
		$_o->confirm_password = json_decode(SQDE_Component::model()->component_object);
        $_o->confirm_password->Label = 'Confirm Password';
        $_o->confirm_password->Value = '';
        $_o->confirm_password->Width = 200;
        
		return $_o;
	}
}