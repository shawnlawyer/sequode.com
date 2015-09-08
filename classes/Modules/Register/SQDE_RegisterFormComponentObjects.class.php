<?php
class SQDE_RegisterFormComponentObjects   {
    public static $package = 'Register';
    
    public static function signup(){
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
        
        SQDE_Component::exists('str','name');
        $components_object->email = json_decode(SQDE_Component::model()->component_object);
        $components_object->email->Label = 'Email Address';
        $components_object->email->Value = '';
        $components_object->email->Width = 200;
        
		return $form_object;
	}
    public static function acceptTerms($user_model = null){
        if($user_model == null ){ $user_model = SQDE_User::model($user_model); }
        $components_object = (object) null;
        
        SQDE_Component::exists('checkboxSwitch','name');
        $components_object->accept = json_decode(SQDE_Component::model()->component_object);
        $components_object->accept->Label = '';
        $components_object->accept->On_Text = 'I Accept';
        $components_object->accept->On_Value = 1;
        $components_object->accept->Off_Text = 'I Accept';
        $components_object->accept->Off_Value = 0;
        $components_object->accept->Value = 0;
        $components_object->accept->CSS_Class = 'focus-input';
		return $components_object;
	}
    public static function terms($user_model = null){
        if($user_model == null ){ $user_model = SQDE_User::model($user_model); }
        $components_object = (object) null;
        
        SQDE_Component::exists('text','name');
        $components_object->terms = json_decode(SQDE_Component::model()->component_object);
        $components_object->terms->Label = 'Terms & Conditions of Use';
        $components_object->terms->Value = strip_tags(file_get_contents('terms-conditions.txt',true));
        $components_object->terms->Width = 30;
        $components_object->terms->Height = 20;
		return $components_object;
	}
}