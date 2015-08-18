<?php
class SQDE_UserOperationsXHR {
    public static $package = 'User';
    public static function emptySequodeFavorites(){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        SQDE_UserOperations::emptySequodeFavorites();
        return;
    }
    public static function addToSequodeFavorites($sequode_model_id){
        if(!(
		SQDE_Sequode::exists($sequode_model_id,'id')
        && !SQDE_UserAuthority::isInSequodeFavorites()
        && SQDE_UserAuthority::canView()
        )){ return; }
        SQDE_UserOperations::addToSequodeFavorites();
        return;
    }
    public static function removeFromSequodeFavorites($sequode_model_id){
        if(!(
		SQDE_Sequode::exists($sequode_model_id,'id')
        && SQDE_UserAuthority::isInSequodeFavorites()
        )){ return; }
        SQDE_UserOperations::removeFromSequodeFavorites();
        return;
    }
    public static function selectPalette($json){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        $input = json_decode(stripslashes($json));
        if(!is_object($input) || (trim($input->palette) == '' || empty(trim($input->palette)))){
            SQDE_Session::set('palette', false);
        }else{
            switch($input->palette){
                case 'sequode_search':
                case 'sequode_favorites':
                    SQDE_Session::set('palette', $input->palette);
                    break;
                default:
                    if((
                    SQDE_Sequode::exists($input->palette,'id')
                    && SQDE_UserAuthority::canView()
                    )){ 
                    SQDE_Session::set('palette', $input->palette);
                    }
                    break;
            }
        }
        $js[]=  'registry.fetch({collection:\'palette\'});';
        return implode(' ',$js);
    }
}