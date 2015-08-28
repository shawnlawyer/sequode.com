<?php
class SQDE_SequodeRoutes{
	public static function collections($collection='collections', $key = null){
        $collections = array('my', 'sequode_favorites', 'palette', 'user', 'sequodes', 'tokens', 'packages');
        switch($collection){
			case 'my':
                SQDE_SequodeCollections::owned();
                return;
			case 'machines':
                $where = array();
				$where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
                $_model = new SQDE_Machines;
				$_model->getAll($where,'id,name');
                $nodes = array();
				foreach($_model->all as $object){
					$nodes[] = '"'.$object->id.'":{"id":"'.$object->id.'","n":"'.$object->name.'"}';
				}
				echo '{'.implode(',', $nodes).'}';
                return;
			case 'packages':
                $where = array();
				$where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
                $_model = new SQDE_Packages;
				$_model->getAll($where,'id,name');
                $nodes = array();
				foreach($_model->all as $object){
					$nodes[] = '"'.$object->id.'":{"id":"'.$object->id.'","n":"'.$object->name.'"}';
				}
				echo '{'.implode(',', $nodes).'}';
                return;
			case 'tokens':
                $where = array();
				$where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
                $_model = new SQDE_Tokens;
				$_model->getAll($where,'id,name');
                $nodes = array();
				foreach($_model->all as $object){
					$nodes[] = '"'.$object->id.'":{"id":"'.$object->id.'","n":"'.$object->name.'"}';
				}
				echo '{'.implode(',', $nodes).'}';
                return;
			case 'sequode_search':
                SQDE_SequodeCollections::search();
                return;
			case 'user_search':
				if(SQDE_Session::is($collection)){
                    $search = SQDE_UsersFinder::search(json_decode(SQDE_Session::get($collection)));
                    $nodes = array();
                    foreach($search as $object){
                        $nodes[] = '"'.$object->id.'":{"id":"'.$object->id.'","n":"'.$object->username.'"}';
                    }
                    echo '{'.implode(',', $nodes).'}';
                }else{
                    echo '{}';
                }
                return;
			case 'session_search':
				if(SQDE_Session::is($collection)){
                    $search = SQDE_SessionFinder::search(SQDE_Session::get($collection));
                    $nodes = array();
                    foreach($search as $object){
                        $nodes[] = '"'.$object->id.'":{"id":"'.$object->id.'","n":"'.$object->username.'"}';
                    }
                    echo '{'.implode(',', $nodes).'}';
                }else{
                    echo '{}';
                }
                return;
			case 'package_search':
				if(SQDE_Session::is($collection)){
                    $search = SQDE_PackageFinder::search(SQDE_Session::get($collection));
                    $nodes = array();
                    foreach($search as $object){
                        $nodes[] = '"'.$object->id.'":{"id":"'.$object->id.'","n":"'.$object->name.'"}';
                    }
                    echo '{'.implode(',', $nodes).'}';
                }else{
                    echo '{}';
                }
                return;
			case 'token_search':
				if(SQDE_Session::is($collection)){
                    $search = SQDE_TokenFinder::search(SQDE_Session::get($collection));
                    $nodes = array();
                    foreach($search as $object){
                        $nodes[] = '"'.$object->id.'":{"id":"'.$object->id.'","n":"'.$object->name.'"}';
                    }
                    echo '{'.implode(',', $nodes).'}';
                }else{
                    echo '{}';
                }
                return;
			case 'machine_search':
				if(SQDE_Session::is($collection)){
                    $search = SQDE_MachinesFinder::search(json_decode(SQDE_Session::get($collection)));
                    $nodes = array();
                    foreach($search as $object){
                        $nodes[] = '"'.$object->id.'":{"id":"'.$object->id.'","n":"'.$object->name.'"}';
                    }
                    echo '{'.implode(',', $nodes).'}';
                }else{
                    echo '{}';
                }
                return;
			case 'sequode_favorites':
                SQDE_SequodeCollections::favorites();
                return;
			case 'palette':
                SQDE_SequodeCollections::palette();
                return;
			case 'user':
                $account = (object) null;
                $account->username = SQDE_AuthenticatedUser::model()->username;
                echo json_encode($account);
                return;
			case 'sequodes':
                SQDE_SequodeCollections::main();
                return;
            default:
			case 'collections':
                echo '{';
                echo  "\n";
                foreach($collections as $loop_key => $collection){
                    if($loop_key != 0){echo ",\n";}
                    echo '"'.$collection.'":';
                    echo self::collections($collection);
                }
                
                echo  "\n";
                echo '}';
                return;
		}
	}
}