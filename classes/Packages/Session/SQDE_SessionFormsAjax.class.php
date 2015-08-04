<?php
class SQDE_SessionFormsAjax {
    public static $package = 'Session';
    public static function search($dom_id = 'FormsContainer'){
        if((!SQDE_UserAuthority::isSystemOwner())){ return; }
        
        $components_array = SQDE_Forms::render(self::$package,__FUNCTION__);
        $js = array();
        $js[] = SQDE_BrowserRemote::addIntoDom('SessionsSearchFieldContainer',$components_array[0]->html,'replace');
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
        $js[] = SQDE_BrowserRemote::addIntoDom('SessionsSearchOptionsMenu',implode('',$html),'replace');
        foreach($components_array as $key => $object){
            if(isset($object->js)){
                $js[] = $object->js;
            }
        }
        return implode(' ',$js);
    }
}