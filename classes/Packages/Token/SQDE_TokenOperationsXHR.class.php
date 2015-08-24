<?php
class SQDE_TokenOperationsXHR {
    public static $package = 'Token';
    public static function newToken(){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        forward_static_call_array(array(SQDE_PackagesHandler::model(static::$package)->operations,__FUNCTION__),array(SQDE_AuthenticatedUser::model()->id));
        $js = array();
        $js[] = 'registry.fetch({collection:\'tokens\', key:'.$modeler::model()->id.'});';
        $js[] = forward_static_call_array(array(SQDE_PackagesHandler::model(static::$package)->xhr->cards,'details'),array($modeler::model()->id));
        return implode(' ', $js);
    }
    
	public static function updatePackageSequode($_model_id, $json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_o = json_decode($json);
        if(!(
        $modeler::exists($_model_id,'id')
        && SQDE_Sequode::exists($_o->sequode,'id')
        && SQDE_SequodeAuthority::isPackage(SQDE_Sequode::model())
        && ( SQDE_UserAuthority::isOwner($modeler::model()) || SQDE_UserAuthority::isSystemOwner() )
        )){ return; }
        forward_static_call_array(array(SQDE_PackagesHandler::model(static::$package)->operations,__FUNCTION__),array($_o->sequode));
		return;
	}
    public static function updateName($_model_id, $json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $collection = 'tokens';
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        $_o = json_decode($json);
        $name = trim(str_replace('-','_',str_replace(' ','_',urldecode($_o->name))));
        if(strlen($name) < 2){
            return ' alert(\'Token name should be more than 1 character long.\');';
        }
        if(!eregi("^([A-Za-z_])*$",substr($name,0,1))){
            return ' alert(\'Token name should start with a letter or underscore\');';
        }
        if(!eregi("^([A-Za-z0-9_])*$",$name)){
            return ' alert(\'Token name must be alphanumeric and all spaces will convert to underscore.\');';
        }
        forward_static_call_array(array(SQDE_PackagesHandler::model(static::$package)->operations,__FUNCTION__),array($name));
        $js = array();
        $js[] = 'registry.fetch({collection:\''.$collection.'\', key:'.$modeler::model()->id.'});';
        return implode(' ', $js);
    }
    public static function delete($_model_id){
        $collection = 'tokens';
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        forward_static_call_array(array(SQDE_PackagesHandler::model(static::$package)->operations,__FUNCTION__),array());
        $js = array();
        $js[] = 'registry.fetch({collection:\''.$collection.'\', key:'.$modeler::model()->id.'});';
        return implode(' ', $js);
    }
    public static function search($json){
        $collection = 'token_search';
        $_o = json_decode(stripslashes($json));
        $_o = (!is_object($_o) || (trim($_o->search) == '' || empty(trim($_o->search)))) ? (object) null : $_o));
        SQDE_Session::set($collection, $_o);
		$js=array();
        $js[] = 'registry.fetch({collection:\''.$collection.'\'});';
        return implode(' ',$js);
    }
}