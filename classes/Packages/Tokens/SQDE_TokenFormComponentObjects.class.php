<?php
class SQDE_PackageFormComponentObjects   {
    public static function name($_model = null){
        if($_model == null ){ $_model = SQDE_Package::model(); }
        
        $components_object = (object) null;
        
        SQDE_Component::exists('str','name');
        $components_object->name = json_decode(SQDE_Component::model()->component_object);
        $components_object->name->Label = '';
        $components_object->name->Value = $_model->name;
        $components_object->name->Width = 200;
        $components_object->name->CSS_Class = 'focus-input';
        
		return $components_object;
        
	}
    public static function search(){
        
        $components_object = (object) null;
        
        SQDE_Component::exists('str','name');
        $components_object->search = json_decode(SQDE_Component::model()->component_object);
        $components_object->search->Label = '';
        $components_object->search->Value = '';
        $components_object->search->Width = 200;
        $components_object->search->CSS_Class = 'focus-input';
        
        SQDE_Component::exists('select','name');
        $components_object->position = json_decode(SQDE_Component::model()->component_object);
        $components_object->position->Label = '';
        $components_object->position->Values = "[{'value':'=%','printable':'Starts With'},{'value':'%=%','printable':'Contains'},{'value':'%=','printable':'Ends With'},{'value':'=','printable':'Exact'}]";
        $components_object->position->Value = '=%';
        $components_object->position->Value_Key = 'value';
        $components_object->position->Printable_Key = 'printable';
        
		return $components_object;
	}
}