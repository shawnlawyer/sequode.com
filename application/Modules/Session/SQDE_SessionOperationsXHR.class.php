<?php

use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\Component\DOMElement\Kit\JS as DOMElementKitJS;

class SQDE_SessionOperationsXHR {
    public static $package = 'Session';
    public static function delete($_model_id){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        $cards_xhr = ModuleRegistry::model(static::$package)->xhr->cards;
        if(!(
            $modeler::exists($_model_id,'id')
        )){ return; }
        $modeler::destroy();
        return $cards_xhr::search();
    }
    /* this should replace the above at a later day.
    public static function delete($_model_id){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        forward_static_call_array(array(ModuleRegistry::model(static::$package)->operations,__FUNCTION__),array());
        $js = array();
        $js[] = forward_static_call_array(array(ModuleRegistry::model(static::$package)->xhr->cards,'my'),array());
        return implode(' ', $js);
    }
    */
    public static function blockIP($_model_id){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        $session_ip = $modeler::model()->ip_address;
        if(!(
            $modeler::exists($_model_id,'id')
            && $modeler::model()->ip_address != $session_ip
        )){ return; }
        \Sequode\Application\Modules\BlockedIP::model()->create($modeler::model()->ip_address);
    }
    public static function search($json){
        $_o = json_decode(stripslashes($json));
        $_o = (!is_object($_o) || (trim($_o->search) == '' || empty(trim($_o->search)))) ? (object) null : $_o;
        $collection = 'session_search';
        SQDE_Session::set($collection, $_o);
		$js=array();
        $js[] = DOMElementKitJS::fetchCollection($collection);
        return implode(' ',$js);
    }
}