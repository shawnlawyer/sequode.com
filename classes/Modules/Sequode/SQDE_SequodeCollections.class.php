<?php
class SQDE_SequodeCollections{
    public static $package = 'Sequode';
	public static $merge = true;
	public static $routes = array(
		'sequodes',
		'my_sequodes',
		'sequode_search',
		'sequode_favorites'
	);
	public static $routes_to_methods = array(
		'sequodes' => 'main',
		'my_sequodes' => 'owned',
		'sequode_search' => 'search',
		'sequode_favorites' => 'favorited'
	);
	public static function main($key = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $_model = new $modeler::$model;
        if($key == null){
            if(SQDE_UserAuthority::isSystemOwner()){
                $where = array();
                $_model->getAll($where,'id, process_description_node');
                $nodes = array();
                foreach($_model->all as $object){
                    $nodes[] = '"' . $object->id . '":' . $object->process_description_node;
                }
            }else{
                $nodes = array();
                $where = array();
                $where[] = array('field'=>'owner_id','operator'=>'!=','value'=>SQDE_AuthenticatedUser::model()->id);
                $where[] = array('field'=>'shared','operator'=>'=','value'=>'1');
                $_model->getAll($where,'id, process_description_node');
                foreach($_model->all as $object){
                    $nodes[] = '"' . $object->id . '":' . $object->process_description_node;
                }
                $where = array();
                $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
                $_model->getAll($where,'id, process_description_node');
                foreach($_model->all as $object){
                    $nodes[] = '"' . $object->id . '":' . $object->process_description_node;
                }
            }
            echo  '{';
            echo  "\n";
            if(0 < count($nodes)){
                echo  implode(",\n", $nodes);
            }
            
            echo  "\n";
            echo  '}';
            return;
        }elseif(
        $modeler::exists($key,'id')
        && SQDE_UserAuthority::canView()
        ){
            echo $modeler::model()->process_description_node;
            return;
        }else{
            echo  '{}';
            return;
        }
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
	public static function favorited(){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $collection = SQDE_PackagesHandler::model(static::$package)->context . '_' . __FUNCTION__;
        $nodes = array();
        if(!empty(SQDE_AuthenticatedUser::model()->$collection)){
            $_model_ids = json_decode(SQDE_AuthenticatedUser::model()->$collection);
            foreach($_model_ids as $_model_id){
                if($modeler::exists($_model_id,'id')){
                    $nodes[] = '"'. $modeler::model()->id .'":{"id":"'.$modeler::model()->id.'","n":"'.$modeler::model()->name.'"}';
                }
            }
        }
        echo '{'.implode(',', $nodes).'}';
        return;
	}
	public static function palette(){
        if(in_array(SQDE_Session::get(__FUNCTION__),static::$routes)){
            $method = static::$routes_to_methods[static::$routes];
            self::$method();
            return;
        }
        $nodes = array();
        $collection = __FUNCTION__;
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