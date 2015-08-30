<?php
class SQDE_UserFormComponentObjects{
    public static $package = 'User';
    public static function updatePassword($user_model = null){
        if($user_model == null ){ $user_model = SQDE_User::model($user_model); }
        $components_object = (object) null;
        
        SQDE_Component::exists('password','name');
		$components_object->password = json_decode(SQDE_Component::model()->component_object);
        $components_object->password->Label = 'Password';
        $components_object->password->Value = '';
        $components_object->password->Width = 200;
        
		return $components_object;
	}
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
    public static function search(){
        
        $components_object = (object) null;
        
        SQDE_Component::exists('str','name');
        $components_object->search = json_decode(SQDE_Component::model()->component_object);
        $components_object->search->Label = '';
        $components_object->search->Value = '';
        $components_object->search->Width = 200;
        $components_object->search->CSS_Class = 'search-sequodes-input';
        
        SQDE_Component::exists('select','name');
        $components_object->position = json_decode(SQDE_Component::model()->component_object);
        $components_object->position->Label = '';
        $components_object->position->Values = "[{'value':'=%','printable':'Starts With'},{'value':'%=%','printable':'Contains'},{'value':'%=','printable':'Ends With'},{'value':'=','printable':'Exact'}]";
        $components_object->position->Value = '=%';
        $components_object->position->Value_Key = 'value';
        $components_object->position->Printable_Key = 'printable';
        
        SQDE_Component::exists('select','name');
        $components_object->field = json_decode(SQDE_Component::model()->component_object);
        $components_object->field->Label = '';
        $components_object->field->Values = "[{'value':'username','printable':'Search By Username'},{'value':'email','printable':'Search By Email'}]";
        $components_object->field->Value = 'username';
        $components_object->field->Value_Key = 'value';
        $components_object->field->Printable_Key = 'printable';
        
        SQDE_Component::exists('select','name');
        $components_object->active = json_decode(SQDE_Component::model()->component_object);
        $components_object->active->Label = '';
        $components_object->active->Values = "[{'value':'all','printable':'Any'},{'value':'0','printable':'Unactivated'},{'value':'1','printable':'Active'},{'value':'2','printable':'Deactivated'}]";
        $components_object->active->Value = 'all';
        $components_object->active->Value_Key = 'value';
        $components_object->active->Printable_Key = 'printable';

                
        $roles_model = new SQDE_Roles;
        $roles_model->getAll();
        $values = array('{\'value\':\'all\',\'printable\':\'Any\'}');
        foreach( $roles_model->all as $object){
            $values[] = '{\'value\':\''.$object->id.'\',\'printable\':\''.$object->name.'\'}';
        }
        SQDE_Component::exists('select','name');
        $components_object->role = json_decode(SQDE_Component::model()->component_object);
        $components_object->role->Label = '';
        $components_object->role->Values = '[' . implode(',',$values) . ']';
        $components_object->role->Value = 'all';
        $components_object->role->Value_Key = 'value';
        $components_object->role->Printable_Key = 'printable';
		return $components_object;
	}
    public static function updateRole($user_model = null){
        if($user_model == null ){ $user_model = SQDE_User::model($user_model); }
        $components_object = (object) null;
        $roles_model = new SQDE_Roles;
        $roles_model->getAll();
        foreach( $roles_model->all as $object){
            $values[] = '{\'value\':\''.$object->id.'\',\'printable\':\''.$object->name.'\'}';
        }
        SQDE_Component::exists('select','name');
        $components_object->role = json_decode(SQDE_Component::model()->component_object);
        $components_object->role->Label = '';
        $components_object->role->Values = '[' . implode(',',$values) . ']';
        $components_object->role->Value = SQDE_User::model()->role_id;
        $components_object->role->Value_Key = 'value';
        $components_object->role->Printable_Key = 'printable';
        
		return $components_object;
	}
    public static function updateActive($user_model = null){
        if($user_model == null ){ $user_model = SQDE_User::model($user_model); }
        $components_object = (object) null;
        SQDE_Component::exists('checkboxSwitch','name');
        $components_object->active = json_decode(SQDE_Component::model()->component_object);
        $components_object->active->Label = '';
        $components_object->active->On_Text = 'Active';
        $components_object->active->On_Value = 1;
        $components_object->active->Off_Text = 'Suspended';
        $components_object->active->Off_Value = 0;
        $components_object->active->Value = $user_model->active;
		return $components_object;
	}
    public static function updateName(){
        $components_object = (object) null;
        
        SQDE_Component::exists('str','name');
		$components_object->username = json_decode(SQDE_Component::model()->component_object);
        $components_object->username->Label = '';
        $components_object->username->Value = SQDE_User::model()->username;
        $components_object->username->Width = 200;
		return $components_object;
	}
}