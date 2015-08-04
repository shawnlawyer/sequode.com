<?php
class SQDE_SessionFormComponentObjects{
    
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
        $components_object->field->Values = "[{'value':'username','printable':'Search By Username'},{'value':'ip_address','printable':'Search By IP'}]";
        $components_object->field->Value = 'username';
        $components_object->field->Value_Key = 'value';
        $components_object->field->Printable_Key = 'printable';
        
		return $components_object;
	}
}