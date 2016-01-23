<?php
class SQDE_SessionFormComponentObjects{
    
    public static function search(){
        
        $_o = (object) null;
        
        \Sequode\Component\FormInput\FormInput::exists('str','name');
        $_o->search = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $_o->search->Label = '';
        $_o->search->Value = '';
        $_o->search->Width = 200;
        $_o->search->CSS_Class = 'search-sequodes-input';
        
        \Sequode\Component\FormInput\FormInput::exists('select','name');
        $_o->position = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $_o->position->Label = '';
        $_o->position->Values = "[{'value':'=%','printable':'Starts With'},{'value':'%=%','printable':'Contains'},{'value':'%=','printable':'Ends With'},{'value':'=','printable':'Exact'}]";
        $_o->position->Value = '=%';
        $_o->position->Value_Key = 'value';
        $_o->position->Printable_Key = 'printable';
        
        \Sequode\Component\FormInput\FormInput::exists('select','name');
        $_o->field = json_decode(\Sequode\Component\FormInput\FormInput::model()->component_object);
        $_o->field->Label = '';
        $_o->field->Values = "[{'value':'username','printable':'Search By Username'},{'value':'ip_address','printable':'Search By IP'}]";
        $_o->field->Value = 'username';
        $_o->field->Value_Key = 'value';
        $_o->field->Printable_Key = 'printable';
        
		return $_o;
	}
}