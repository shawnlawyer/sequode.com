<?php
class SQDE_PackageFormComponentObjects {
    public static $package = 'Package';
    public static function name($_model = null){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : $_model;
        $_o = (object) null;
        
        SQDE_Component::exists('str','name');
        $_o->name = json_decode(SQDE_Component::model()->component_object);
        $_o->name->Label = '';
        $_o->name->Value = $_model->name;
        $_o->name->Width = 200;
        $_o->name->CSS_Class = 'focus-input';
        
		return $_o;
	}
    public static function search(){
        
        $_o = (object) null;
        
        SQDE_Component::exists('str','name');
        $_o->search = json_decode(SQDE_Component::model()->component_object);
        $_o->search->Label = '';
        $_o->search->Value = '';
        $_o->search->Width = 200;
        $_o->search->CSS_Class = 'focus-input';
        
        SQDE_Component::exists('select','name');
        $_o->position = json_decode(SQDE_Component::model()->component_object);
        $_o->position->Label = '';
        $_o->position->Values = "[{'value':'=%','printable':'Starts With'},{'value':'%=%','printable':'Contains'},{'value':'%=','printable':'Ends With'},{'value':'=','printable':'Exact'}]";
        $_o->position->Value = '=%';
        $_o->position->Value_Key = 'value';
        $_o->position->Printable_Key = 'printable';
        
		return $_o;
	}
    public static function packageSequode($_model = null, $user_model = null){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_model = ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : $_model;
        $_user_model = ($_user_model == null) ? SQDE_AuthenticatedUser::model() : $_user_model;
        
        $_o = (object) null;
        $values = $where = array();
        
        $values[] = '{\'value\':\'0\',\'printable\':\'Select Package Sequode\'}';
        $sequodes_model = new SQDE_Sequodes;
        /*
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>5);
        $where[] = array('field'=>'shared','operator'=>'=','value'=>1);
        $where[] = array('field'=>'package','operator'=>'=','value'=>1);
        $sequodes_model->getAll($where);
        foreach( $sequodes_model->all as $object){
            $values[] = '{\'value\':\''.$object->id.'\',\'printable\':\''.$object->name.'\'}';
        }
        */
        $where = array();
        $where[] = array('field'=>'owner_id', 'operator'=>'=', 'value'=>$_user_model->id);
        $where[] = array('field'=>'package', 'operator'=>'=', 'value'=>1);
        $sequodes_model->getAll($where);
        foreach( $sequodes_model->all as $object){
            $values[] = '{\'value\':\''.$object->id.'\',\'printable\':\''.$object->name.'\'}';
        }
        SQDE_Component::exists('select','name');
        $_o->sequode = json_decode(SQDE_Component::model()->component_object);
        $_o->sequode->Label = '';
        $_o->sequode->Values = '[' . implode(',',$values) . ']';
        $_o->sequode->Value = $_model->sequode_id;
        $_o->sequode->Value_Key = 'value';
        $_o->sequode->Printable_Key = 'printable';
        
		return $_o;
	}
}