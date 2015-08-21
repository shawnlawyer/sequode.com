<?php
class SQDE_SessionOperationsXHR {
    public static $package = 'Session';
    public static $modeler = 'SQDE_Session';
    public static function delete($_model_id){
        $modeler = static::$modeler;
        if(!(
            $modeler::exists($_model_id,'id')
        )){ return; }
        SQDE_Session::destroy();
        return SQDE_SessionCardsXHR::search();
    }
    public static function blockIP($_model_id){
        $modeler = static::$modeler;
        $session_ip = $modeler::model()->ip_address;
        if(!(
            $modeler::exists($_model_id,'id')
            && $modeler::model()->ip_address != $session_ip
        )){ return; }
        SQDE_BlacklistIP::model()->create($modeler::model()->ip_address);
    }
    public static function search($search_json){
        $search_object = json_decode(stripslashes($search_json));
        if(!is_object($search_object) || (trim($search_object->search) == '' || empty(trim($search_object->search)))){
            SQDE_Session::set('session_search', '{}');
        }else{
            SQDE_Session::set('session_search', stripslashes($search_json));
        }
		$js = array();
        $js[] = 'registry.active_collection = \'session_search\';';
        $js[] = 'registry.fetch({collection:\'session_search\'});';
        return implode(' ',$js);
    }
}