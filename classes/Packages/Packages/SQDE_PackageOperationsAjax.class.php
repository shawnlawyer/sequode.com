<?php
class SQDE_PackageOperationsAjax {
    public static function newPackage(){
        SQDE_PackageOperations::newPackage(SQDE_AuthenticatedUser::model()->id);
        $js = array();
        $js[] = 'registry.fetch({collection:\'machines\', key:'.SQDE_Package::model()->id.'});';
        $js[] = SQDE_PackageCardsAjax::details(SQDE_Package::model()->id);
        return implode(' ', $js);
    }
    public static function updateName($machine_model_id, $json){
        if(!(
        SQDE_Package::exists($machine_model_id,'id')
        && (SQDE_UserAuthority::isPackageOwner()
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        $input = json_decode($json);
        $name = trim(str_replace('-','_',str_replace(' ','_',urldecode($input->name))));
        if(strlen($name) < 2){
            return ' alert(\'Application name should be more than 1 character long.\');';
        }
        if(!eregi("^([A-Za-z_])*$",substr($name,0,1))){
            return ' alert(\'Application name should start with a letter or underscore\');';
        }
        if(!eregi("^([A-Za-z0-9_])*$",$name)){
            return ' alert(\'Application must be alphanumeric and all spaces will convert to underscore.\');';
        }
        SQDE_PackageOperations::updateName($name);
        $js = array();
        $js[] = 'registry.fetch({collection:\'machines\', key:'.SQDE_Package::model()->id.'});';
        return implode(' ', $js);
        
        return;
    }
    public static function delete($machine_model_id){
        if(!(
        SQDE_Package::exists($machine_model_id,'id')
        && (SQDE_UserAuthority::isPackageOwner()
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        SQDE_PackageOperations::delete();
        $js = array();
        $js[] = 'registry.fetch({collection:\'machines\', key:'.SQDE_Package::model()->id.'});';
        return implode(' ', $js);
    }
    public static function search($search_json){
        $search_object = json_decode(stripslashes($search_json));
        if(!is_object($search_object) || (trim($search_object->search) == '' || empty(trim($search_object->search)))){
            SQDE_Session::set('machine_search', '{}');
        }else{
            SQDE_Session::set('machine_search', stripslashes($search_json));
        }
		$js=array();
        $js[] = 'registry.fetch({collection:\'machine_search\'});';
        $js[] = 'registry.active_collection = \'machine_search\';';
        
        return implode(' ',$js);
    }
}