<?php
class SQDE_PackageOperationsXHR {
    public static $package = 'Package';
    public static function newPackage(){
        SQDE_PackageOperations::newPackage(SQDE_AuthenticatedUser::model()->id);
        $js = array();
        $js[] = 'registry.fetch({collection:\'packages\', key:'.SQDE_Package::model()->id.'});';
        $js[] = SQDE_PackageCardsXHR::details(SQDE_Package::model()->id);
        return implode(' ', $js);
    }
    
	public static function updatePackageSequode($_model_id, $json){
        $input = json_decode($json);
        if(!(
        SQDE_Package::exists($_model_id,'id')
        && SQDE_Sequode::exists($input->sequode,'id')
        && SQDE_SequodeAuthority::isPackage(SQDE_Sequode::model())
        && ( SQDE_UserAuthority::isOwner(SQDE_Package::model()) || SQDE_UserAuthority::isSystemOwner() )
        )){ return; }
        SQDE_PackageOperations::updatePackageSequode($input->sequode);
		return;
	}
    public static function updateName($_model_id, $json){
        if(!(
        SQDE_Package::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( SQDE_Package::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        $input = json_decode($json);
        $name = trim(str_replace('-','_',str_replace(' ','_',urldecode($input->name))));
        if(strlen($name) < 2){
            return ' alert(\'Package name should be more than 1 character long.\');';
        }
        if(!eregi("^([A-Za-z_])*$",substr($name,0,1))){
            return ' alert(\'Package name should start with a letter or underscore\');';
        }
        if(!eregi("^([A-Za-z0-9_])*$",$name)){
            return ' alert(\'Package name must be alphanumeric and all spaces will convert to underscore.\');';
        }
        SQDE_PackageOperations::updateName($name);
        $js = array();
        $js[] = 'registry.fetch({collection:\'packages\', key:'.SQDE_Package::model()->id.'});';
        return implode(' ', $js);
        
        return;
    }
    public static function delete($_model_id){
        if(!(
        SQDE_Package::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( SQDE_Package::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        SQDE_PackageOperations::delete();
        $js = array();
        $js[] = 'registry.fetch({collection:\'packages\', key:'.SQDE_Package::model()->id.'});';
        return implode(' ', $js);
    }
    public static function search($search_json){
        $search_object = json_decode(stripslashes($search_json));
        if(!is_object($search_object) || (trim($search_object->search) == '' || empty(trim($search_object->search)))){
            SQDE_Session::set('package_search', '{}');
        }else{
            SQDE_Session::set('package_search', stripslashes($search_json));
        }
		$js=array();
        $js[] = 'registry.fetch({collection:\'package_search\'});';
        $js[] = 'registry.active_collection = \'package_search\';';
        
        return implode(' ',$js);
    }
}