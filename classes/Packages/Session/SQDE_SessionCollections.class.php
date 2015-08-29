<?php
class SQDE_SessionCollections{
    public static $package = 'Session';
	public static $merge = true;
	public static $routes = array(
		'session_search'
	);
	public static $routes_to_methods = array(
		'session_search' => 'search'
	);
	public static function search(){
        $finder = SQDE_PackagesHandler::model(static::$package)->finder;
        $collection = SQDE_PackagesHandler::model(static::$package)->context . '_' . __FUNCTION__;
        $nodes = array();
        if(SQDE_Session::is($collection)){
            $_array = $finder::search(SQDE_Session::get($collection));
            foreach($_array as $_object){
                $nodes[] = '"'.$_object->id.'":{"id":"'.$_object->id.'","n":"'.$_object->name.'"}';
            }
        }
        echo '{'.implode(',', $nodes).'}';
        return;
	}
}