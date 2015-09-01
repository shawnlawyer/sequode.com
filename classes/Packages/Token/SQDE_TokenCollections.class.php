<?php
class SQDE_TokenCollections{
    public static $package = 'Token';
	public static $merge = false;
	public static $routes = array(
		'tokens',
		'my',
		'my_tokens',
		'token_search'
	);
	public static $routes_to_methods = array(
		'tokens' => 'owned',
		'my' => 'owned',
		'my_tokens' => 'owned',
		'token_search' => 'search',
	);
	public static function owned(){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = new $modeler::$model;
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
        $_model->getAll($where,'id,name');
        $nodes = array();
        foreach($_model->all as $object){
            $nodes[] = '"'.$object->id.'":{"id":"'.$object->id.'","n":"'.$object->name.'"}';
        }
        echo '{'.implode(',', $nodes).'}';
        return;
	}
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