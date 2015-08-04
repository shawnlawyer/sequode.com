<?php
class SQDE_UsersFormsAjax {
    public static $package = 'Users';
    public static function search($dom_id = ''){
        $components_array = SQDE_Forms::render(self::$package,__FUNCTION__);
        $js = array();
        $js[] = SQDE_BrowserRemote::addIntoDom('UsersSearchFieldContainer',$components_array[0]->html,'replace');
        if(isset($components_array[0]->js)){
            $js[] = $components_array[0]->js;
        }
        array_shift($components_array);
        $html = array();
        foreach($components_array as $key => $object){
            if(isset($object->html)){
                $html[] = '<div class="automagic-card-menu-item noSelect">';
                $html[] = $object->html;
                $html[] = '</div>';
            }
        }
        $js[] = SQDE_BrowserRemote::addIntoDom('UsersSearchOptionsMenu',implode('',$html),'replace');
        foreach($components_array as $key => $object){
            if(isset($object->js)){
                $js[] = $object->js;
            }
        }
        return implode(' ',$js);
    }
    public static function updatePassword($user_model_id, $dom_id = ''){
        if(!(
        SQDE_User::exists($user_model_id,'id')
        )){return;}
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
    public static function updateEmail($user_model_id, $dom_id = ''){
        if(!(
        SQDE_User::exists($user_model_id,'id')
        )){return;}
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
    public static function updateDomain($user_model_id, $dom_id = ''){
        if(!(
        SQDE_User::exists($user_model_id,'id')
        )){return;}
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
    public static function updateRole($user_model_id, $dom_id = ''){
        if(!(
        SQDE_User::exists($user_model_id,'id')
        )){return;}
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
    public static function updateActive($user_model_id, $dom_id = ''){
        if(!(
        SQDE_User::exists($user_model_id,'id')
        )){return;}
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
    
    public static function updateName($user_model_id, $dom_id = ''){
        if(!(
        SQDE_User::exists($user_model_id,'id')
        )){return;}
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