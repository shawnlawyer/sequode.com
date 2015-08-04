<?php
class SQDE_UserFormComponentObjects{
    public static function selectPalette($user_model = null){
        if($user_model == null ){ $user_model = SQDE_User::model($user_model); }
        $components_object = (object) null;
        $values = $where = array();
        
        $values[] = '{\'value\':\'0\',\'printable\':\'Select Sequodes Palette\'}';
        //$values[] = '{\'value\':\'sequode_search\',\'printable\':\'Sequode Search Results\'}';
        $values[] = '{\'value\':\'sequode_favorites\',\'printable\':\'My Sequode Favorites\'}';
        
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>5);
        $where[] = array('field'=>'shared','operator'=>'=','value'=>1);
        $where[] = array('field'=>'palette','operator'=>'=','value'=>1);
        $sequodes_model = new SQDE_Sequodes;
        $sequodes_model->getAll($where);
        foreach( $sequodes_model->all as $object){
            $values[] = '{\'value\':\''.$object->id.'\',\'printable\':\''.$object->name.'\'}';
        }
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
        $where[] = array('field'=>'palette','operator'=>'=','value'=>1);
        $sequodes_model->getAll($where);
        foreach( $sequodes_model->all as $object){
            $values[] = '{\'value\':\''.$object->id.'\',\'printable\':\''.$object->name.'\'}';
        }
        SQDE_Component::exists('select','name');
        $components_object->palette = json_decode(SQDE_Component::model()->component_object);
        $components_object->palette->Label = '';
        $components_object->palette->Values = '[' . implode(',',$values) . ']';
        $components_object->palette->Value = '0';
        $components_object->palette->Value_Key = 'value';
        $components_object->palette->Printable_Key = 'printable';
        
		return $components_object;
	}
}