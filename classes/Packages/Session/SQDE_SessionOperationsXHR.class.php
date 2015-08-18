<?php
class SQDE_SessionOperationsXHR {
    public static function delete($session_model_id){
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        && SQDE_Session::exists($session_model_id,'id')
        )){ return; }
        SQDE_Session::destroy();
		
        //$js[] = 'registry.active_collection = \'session_search\';';
        //$js[] = 'registry.fetch({collection:\'session_search\'});';
        //return implode(' ',$js);
    }
    public static function blockIP($session_model_id){
        $session_ip = SQDE_Session::model()->ip_address;
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        && SQDE_Session::exists($session_model_id,'id')
        && SQDE_Session::model()->ip_address != $session_ip
        )){ return; }
        SQDE_BlacklistIP::model()->create(SQDE_Session::model()->ip_address);
        //$js[] = 'registry.active_collection = \'session_search\';';
        //$js[] = 'registry.fetch({collection:\'session_search\'});';
        //return implode(' ',$js);
    }
    public static function search($search_json){
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        )){ return; }
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