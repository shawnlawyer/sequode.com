<?php
class SQDE_SequodeFormsXHR {
    public static $package = 'Sequode';
    public static function name($_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id,'id')
            && SQDE_UserAuthority::canEdit()
        )){ return; }
        
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
        $js[] = '$(\'.focus-input\').focus();';
        $js[] = '$(\'.focus-input\').select();';    
        return implode(' ',$js);
    }  
    public static function description($_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id,'id')
            && SQDE_UserAuthority::canEdit()
        )){ return; }
        
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
        $js[] = '$(\'.focus-input\').focus();';
        $js[] = '$(\'.focus-input\').select();';    
        return implode(' ',$js);
    }
    public static function search($dom_id = null){
        if(!(
            SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        $components_array = SQDE_Forms::render(self::$package,__FUNCTION__);
        $js = array();
        $js[] = SQDE_BrowserRemote::addIntoDom('SequodeSearchFieldContainer',$components_array[0]->html,'replace');
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
        $js[] = SQDE_BrowserRemote::addIntoDom('SequodeSearchOptionsMenu',implode('',$html),'replace');
        foreach($components_array as $key => $object){
            if(isset($object->js)){
                $js[] = $object->js;
            }
        }
        return implode(' ',$js);
    }
    public static function component($type, $_model_id, $map_key, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id,'id')
            && SQDE_UserAuthority::canEdit()
        )){ return; }
		switch($type){
			case 'input':
			case 'property':
				break;
			default:
				return;
		}
        $components_array = SQDE_Forms::render(self::$package, __FUNCTION__, array($type, $map_key));
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
    public static function componentSettings($type, $member, $_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id,'id')
            && SQDE_UserAuthority::canEdit()
        )){ return; }
        switch($type){
            case 'input':
            case 'property':
                $model_member = $type.'_form_object';
                $form_object = json_decode(SQDE_Sequode::model()->$model_member);
            break;
            default:
                return;
        }
        $components_array = SQDE_Forms::render(self::$package, __FUNCTION__, array($type, $member, $dom_id));
        $html = array();
        $html[] = SQDE_Card::contentRowDivider();
        foreach($components_array as $key => $object){
            if(isset($object->html)){
                $html[] = $object->html;
                $html[] = SQDE_Card::contentRowDivider();
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
    public static function sequode($_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id, 'id')
            && SQDE_UserAuthority::canRun()
        )){ return; }
        
        $components_array = SQDE_Forms::render(self::$package, __FUNCTION__, array($dom_id));
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
    public static function updateIsPalette($_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id, 'id')
            && SQDE_UserAuthority::canEdit()
        )){return;}
        $components_array = SQDE_Forms::render(self::$package, __FUNCTION__);
        $html = array();
        foreach($components_array as $key => $object){
            if(isset($object->html)){
                $html[] = $object->html;
            }
        }
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode('',$html),'replace');
        foreach($components_array as $key => $object){
            if(isset($object->js)){
                $js[] = $object->js;
            }
        }
        return implode(' ',$js);
    }
    public static function updateIsPackage($_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id, 'id')
            && SQDE_UserAuthority::canEdit()
        )){return;}
        $components_array = SQDE_Forms::render(self::$package, __FUNCTION__);
        $html = array();
        foreach($components_array as $key => $object){
            if(isset($object->html)){
                $html[] = $object->html;
            }
        }
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode('',$html),'replace');
        foreach($components_array as $key => $object){
            if(isset($object->js)){
                $js[] = $object->js;
            }
        }
        return implode(' ',$js);
    }
    public static function sharing($_model_id, $dom_id){
        if(!(
            SQDE_UserAuthority::isSystemOwner()
            && SQDE_Sequode::exists($_model_id, 'id')
        )){return;}
        $components_array = SQDE_Forms::render(self::$package, __FUNCTION__);
        $html = array();
        foreach($components_array as $key => $object){
            if(isset($object->html)){
                $html[] = $object->html;
            }
        }
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode('',$html),'replace');
        foreach($components_array as $key => $object){
            if(isset($object->js)){
                $js[] = $object->js;
            }
        }
        return implode(' ',$js);
    }
    public static function tenancy($_model_id, $dom_id){
        if(!(
            SQDE_UserAuthority::isSystemOwner()
            && SQDE_Sequode::exists($_model_id, 'id')
        )){return;}
        $components_array = SQDE_Forms::render(self::$package, __FUNCTION__);
        $html = array();
        foreach($components_array as $key => $object){
            if(isset($object->html)){
                $html[] = $object->html;
            }
        }
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id, implode('',$html),'replace');
        foreach($components_array as $key => $object){
            if(isset($object->js)){
                $js[] = $object->js;
            }
        }
        return implode(' ',$js);
    }
}