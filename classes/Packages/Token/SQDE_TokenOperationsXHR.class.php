<?php
class SQDE_TokenOperationsXHR {
    public static $package = 'Token';
    public static function newToken(){
        SQDE_TokenOperations::newToken(SQDE_AuthenticatedUser::model()->id);
        $js = array();
        $js[] = 'registry.fetch({collection:\'tokens\', key:'.SQDE_Token::model()->id.'});';
        $js[] = SQDE_TokenCardsXHR::details(SQDE_Token::model()->id);
        return implode(' ', $js);
    }
    
	public static function updatePackageSequode($_model_id, $json){
        $input = json_decode($json);
        if(!(
        SQDE_Token::exists($_model_id,'id')
        && SQDE_Sequode::exists($input->sequode,'id')
        && SQDE_SequodeAuthority::isPackage(SQDE_Sequode::model())
        && ( SQDE_UserAuthority::isOwner(SQDE_Token::model()) || SQDE_UserAuthority::isSystemOwner() )
        )){ return; }
        SQDE_TokenOperations::updatePackageSequode($input->sequode);
		return;
	}
    public static function updateName($_model_id, $json){
        if(!(
        SQDE_Token::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( SQDE_Token::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        $input = json_decode($json);
        $name = trim(str_replace('-','_',str_replace(' ','_',urldecode($input->name))));
        if(strlen($name) < 2){
            return ' alert(\'Token name should be more than 1 character long.\');';
        }
        if(!eregi("^([A-Za-z_])*$",substr($name,0,1))){
            return ' alert(\'Token name should start with a letter or underscore\');';
        }
        if(!eregi("^([A-Za-z0-9_])*$",$name)){
            return ' alert(\'Token name must be alphanumeric and all spaces will convert to underscore.\');';
        }
        SQDE_TokenOperations::updateName($name);
        $js = array();
        $js[] = 'registry.fetch({collection:\'tokens\', key:'.SQDE_Token::model()->id.'});';
        return implode(' ', $js);
        
        return;
    }
    public static function delete($_model_id){
        if(!(
        SQDE_Token::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( SQDE_Token::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        SQDE_TokenOperations::delete();
        $js = array();
        $js[] = 'registry.fetch({collection:\'tokens\', key:'.SQDE_Token::model()->id.'});';
        return implode(' ', $js);
    }
    public static function search($search_json){
        $search_object = json_decode(stripslashes($search_json));
        if(!is_object($search_object) || (trim($search_object->search) == '' || empty(trim($search_object->search)))){
            SQDE_Session::set('token_search', '{}');
        }else{
            SQDE_Session::set('token_search', stripslashes($search_json));
        }
		$js=array();
        $js[] = 'registry.fetch({collection:\'token_search\'});';
        return implode(' ',$js);
    }
}