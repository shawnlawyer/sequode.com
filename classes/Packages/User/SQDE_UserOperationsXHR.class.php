<?php
class SQDE_UserOperationsXHR {
    public static $package = 'User';
    public static function emptySequodeFavorites(){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        forward_static_call_array(array(SQDE_PackagesHandler::model(static::$package)->operations,__FUNCTION__),array());
        return;
    }
    public static function addToSequodeFavorites($_model_id){
        if(!(
		SQDE_Sequode::exists($_model_id,'id')
        && !SQDE_UserAuthority::isInSequodeFavorites()
        && SQDE_UserAuthority::canView()
        )){ return; }
        forward_static_call_array(array(SQDE_PackagesHandler::model(static::$package)->operations,__FUNCTION__),array());
        return;
    }
    public static function removeFromSequodeFavorites($_model_id){
        if(!(
		SQDE_Sequode::exists($_model_id,'id')
        && SQDE_UserAuthority::isInSequodeFavorites()
        )){ return; }
        forward_static_call_array(array(SQDE_PackagesHandler::model(static::$package)->operations,__FUNCTION__),array());
        return;
    }
    public static function selectPalette($json){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        $_o = json_decode(stripslashes($json));
        if(!is_object($_o) || (trim($_o->palette) == '' || empty(trim($_o->palette)))){
            SQDE_Session::set('palette', false);
        }else{
            switch($_o->palette){
                case 'sequode_search':
                case 'sequode_favorites':
                    SQDE_Session::set('palette', $_o->palette);
                    break;
                default:
                    if((
                    SQDE_Sequode::exists($_o->palette,'id')
                    && SQDE_UserAuthority::canView()
                    )){ 
                    SQDE_Session::set('palette', $_o->palette);
                    }
                    break;
            }
        }
        $js[]=  SQDE_ComponentJS::fetchCollection('palette');
        return implode(' ',$js);
    }
}