<?php
class SQDE_AuthFormComponentObjects   {
    public static $package = 'Auth';
    public static function login(){
        $_o = (object) null;
        
        \Sequode\Component\FormInput\FormInput::exists('str','name');
        $_o->login = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $_o->login->Label = '';
        $_o->login->Value = '';
        $_o->login->Width = 200;
        $_o->login->CSS_Class = 'focus-input';
        
		return $_o;
	}
    public static function secret(){
        $_o = (object) null;
        
        \Sequode\Component\FormInput\FormInput::exists('password','name');
		$_o->secret = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $_o->secret->Label = '';
        $_o->secret->Value = '';
        $_o->secret->Width = 200;
        $_o->secret->CSS_Class = 'focus-input';
        
		return $_o;
	}
}