<?php
class SQDE_UserFormsAjax {
    public static $package = 'Account';
    public static function updatePassword($dom_id = 'FormsContainer'){
    
        if(!(SQDE_Session::is('user_id') && SQDE_User::exists(SQDE_Session::get('user_id'),'id'))){ return; }
        
        $components_array = SQDE_Forms::render(self::$package,__FUNCTION__);
        $html = array();
        foreach($components_array as $key => $object){
            if(isset($object->html)){
                $html[] = $object->html;
            }
        }
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id,implode('',$html),'replace');
        foreach($components_array as $key => $object){
            if(isset($object->js)){
                $js[] = $object->js;
            }
        }
        return implode(' ',$js);
    }
    public static function updateEmail($dom_id = 'FormsContainer'){
    
        if(!(SQDE_Session::is('user_id') && SQDE_User::exists(SQDE_Session::get('user_id'),'id'))){ return; }
        
        $components_array = SQDE_Forms::render(self::$package,__FUNCTION__);
        $html = array();
        foreach($components_array as $key => $object){
            if(isset($object->html)){
                $html[] = $object->html;
            }
        }
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id,implode('',$html),'replace');
        foreach($components_array as $key => $object){
            if(isset($object->js)){
                $js[] = $object->js;
            }
        }
        return implode(' ',$js);
    }
    public static function updateDomain($dom_id = 'FormsContainer'){
    
        if(!(SQDE_Session::is('user_id') && SQDE_User::exists(SQDE_Session::get('user_id'),'id'))){ return; }
        
        $components_array = SQDE_Forms::render(self::$package,__FUNCTION__);
        $html = array();
        foreach($components_array as $key => $object){
            if(isset($object->html)){
                $html[] = $object->html;
            }
        }
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id,implode('',$html),'replace');
        foreach($components_array as $key => $object){
            if(isset($object->js)){
                $js[] = $object->js;
            }
        }
        return implode(' ',$js);
    }
}