<?php
class SQDE_UserFormComponentObjects{
    public static $package = 'User';
    public static function updatePassword(){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_o = (object) null;
        
        SQDE_Component::exists('password','name');
		$_o->password = json_decode(SQDE_Component::model()->component_object);
        $_o->password->Label = 'Password';
        $_o->password->Value = '';
        $_o->password->Width = 200;
        
		return $_o;
	}
    public static function updateEmail($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = ($_model == null) ? forward_static_call_array(array(self::$modeler,'model'),array()) : $_model;
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
    public static function search(){
        
        $_o = (object) null;
        
        SQDE_Component::exists('str','name');
        $_o->search = json_decode(SQDE_Component::model()->component_object);
        $_o->search->Label = '';
        $_o->search->Value = '';
        $_o->search->Width = 200;
        $_o->search->CSS_Class = 'search-sequodes-input';
        
        SQDE_Component::exists('select','name');
        $_o->position = json_decode(SQDE_Component::model()->component_object);
        $_o->position->Label = '';
        $_o->position->Values = "[{'value':'=%','printable':'Starts With'},{'value':'%=%','printable':'Contains'},{'value':'%=','printable':'Ends With'},{'value':'=','printable':'Exact'}]";
        $_o->position->Value = '=%';
        $_o->position->Value_Key = 'value';
        $_o->position->Printable_Key = 'printable';
        
        SQDE_Component::exists('select','name');
        $_o->field = json_decode(SQDE_Component::model()->component_object);
        $_o->field->Label = '';
        $_o->field->Values = "[{'value':'username','printable':'Search By Username'},{'value':'email','printable':'Search By Email'}]";
        $_o->field->Value = 'username';
        $_o->field->Value_Key = 'value';
        $_o->field->Printable_Key = 'printable';
        
        SQDE_Component::exists('select','name');
        $_o->active = json_decode(SQDE_Component::model()->component_object);
        $_o->active->Label = '';
        $_o->active->Values = "[{'value':'all','printable':'Any'},{'value':'0','printable':'Unactivated'},{'value':'1','printable':'Active'},{'value':'2','printable':'Deactivated'}]";
        $_o->active->Value = 'all';
        $_o->active->Value_Key = 'value';
        $_o->active->Printable_Key = 'printable';

                
        $roles_model = new SQDE_Roles;
        $roles_model->getAll();
        $values = array('{\'value\':\'all\',\'printable\':\'Any\'}');
        foreach( $roles_model->all as $object){
            $values[] = '{\'value\':\''.$object->id.'\',\'printable\':\''.$object->name.'\'}';
        }
        SQDE_Component::exists('select','name');
        $_o->role = json_decode(SQDE_Component::model()->component_object);
        $_o->role->Label = '';
        $_o->role->Values = '[' . implode(',',$values) . ']';
        $_o->role->Value = 'all';
        $_o->role->Value_Key = 'value';
        $_o->role->Printable_Key = 'printable';
		return $_o;
	}
    public static function updateRole($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = ($_model == null) ? forward_static_call_array(array(self::$modeler,'model'),array()) : $_model;
        $_o = (object) null;
        $roles_model = new SQDE_Roles;
        $roles_model->getAll();
        foreach( $roles_model->all as $object){
            $values[] = '{\'value\':\''.$object->id.'\',\'printable\':\''.$object->name.'\'}';
        }
        SQDE_Component::exists('select','name');
        $_o->role = json_decode(SQDE_Component::model()->component_object);
        $_o->role->Label = '';
        $_o->role->Values = '[' . implode(',',$values) . ']';
        $_o->role->Value = SQDE_User::model()->role_id;
        $_o->role->Value_Key = 'value';
        $_o->role->Printable_Key = 'printable';
        
		return $_o;
	}
    public static function updateActive($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = ($_model == null) ? forward_static_call_array(array(self::$modeler,'model'),array()) : $_model;
        $_o = (object) null;
        SQDE_Component::exists('checkboxSwitch','name');
        $_o->active = json_decode(SQDE_Component::model()->component_object);
        $_o->active->Label = '';
        $_o->active->On_Text = 'Active';
        $_o->active->On_Value = 1;
        $_o->active->Off_Text = 'Suspended';
        $_o->active->Off_Value = 0;
        $_o->active->Value = $_model->active;
		return $_o;
	}
    public static function updateName($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = ($_model == null) ? forward_static_call_array(array(self::$modeler,'model'),array()) : $_model;
        $_o = (object) null;
        
        SQDE_Component::exists('str','name');
		$_o->username = json_decode(SQDE_Component::model()->component_object);
        $_o->username->Label = '';
        $_o->username->Value = $_model->username;
        $_o->username->Width = 200;
		return $_o;
	}
}