<?php
class SQDE_AccountFormComponentObjects   {
    public static function updateEmail($user_model = null){
        if($user_model == null ){ $user_model = SQDE_User::model($user_model); }
        $components_object = (object) null;
        
        SQDE_Component::exists('str','name');
		$components_object->email = json_decode(SQDE_Component::model()->component_object);
        $components_object->email->Label = 'Email';
        $components_object->email->Value = $user_model->email;
        $components_object->email->Width = 200;
        
        SQDE_Component::exists('password','name');
		$components_object->password = json_decode(SQDE_Component::model()->component_object);
        $components_object->password->Label = 'Password';
        $components_object->password->Value = '';
        $components_object->password->Width = 200;
        $components_object->password->CSS_Class = 'focus-input';
        
		return $components_object;
	}
    public static function updateDomain($user_model){
        if($user_model == null ){ $user_model = SQDE_User::model($user_model); }
        $components_object = (object) null;
        
        SQDE_Component::exists('str','name');
		$components_object->domain = json_decode(SQDE_Component::model()->component_object);
        $components_object->domain->Label = 'Domain';
        $components_object->domain->Value = $user_model->domain;
        $components_object->domain->Width = 200;
        
		return $components_object;
	}
    public static function updatePassword(){
        $form_object = (object) null;
        
        SQDE_Component::exists('password','name');
		$components_object->password = json_decode(SQDE_Component::model()->component_object);
        $components_object->password->Label = 'Current Password';
        $components_object->password->Value = '';
        $components_object->password->Width = 200;
        $components_object->password->CSS_Class = 'focus-input';
        
        SQDE_Component::exists('password','name');
		$components_object->new_password = json_decode(SQDE_Component::model()->component_object);
        $components_object->new_password->Label = 'New Password';
        $components_object->new_password->Value = '';
        $components_object->new_password->Width = 200;
        
        SQDE_Component::exists('password','name');
		$components_object->confirm_password = json_decode(SQDE_Component::model()->component_object);
        $components_object->confirm_password->Label = 'Confirm Password';
        $components_object->confirm_password->Value = '';
        $components_object->confirm_password->Width = 200;
        
		return $components_object;
	}
}