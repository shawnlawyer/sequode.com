<?php
class SQDE_SequodeRoutes{
	public static function collections($collection='collections', $key = null){
        $collections = array('my', 'sequode_favorites', 'palette', 'user', 'sequodes', 'tokens', 'packages');
        switch($collection){
			case 'my':
                $where = array();
				$where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
                $_model = new SQDE_Sequodes;
				$_model->getAll($where,'id,name');
                $nodes = array();
				foreach($_model->all as $object){
					$nodes[] = '"'.$object->id.'":{"id":"'.$object->id.'","n":"'.$object->name.'"}';
				}
				echo '{'.implode(',', $nodes).'}';
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
				if(SQDE_Session::is($collection)){
                    $search = SQDE_SequodeFinder::search(json_decode(SQDE_Session::get($collection)));
                    $nodes = array();
                    foreach($search as $object){
                        $nodes[] = '"'.$object->id.'":{"id":"'.$object->id.'","n":"'.$object->name.'"}';
                    }
                    echo '{'.implode(',', $nodes).'}';
                }else{
                    echo '{}';
                }
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
                if(!empty(SQDE_AuthenticatedUser::model()->sequode_favorites)){
                    $palette = json_decode(SQDE_AuthenticatedUser::model()->sequode_favorites);
                    $nodes = array();
                    $sequode_model = new SQDE_Sequodes;
                    
                    foreach($palette as $id){
                        $sequode_model->exists($id,'id');
                        $nodes[] = '"'.$sequode_model->id.'":{"id":"'.$sequode_model->id.'","n":"'.$sequode_model->name.'"}';
                    }
                    echo '{'.implode(',', $nodes).'}';
                }else{
                    echo '{}';
                }
                return;
			case 'palette':
                if(SQDE_Session::get('palette') == 'sequode_search'){
                    self::collections('sequode_search');
                }elseif(SQDE_Session::get('palette') == 'sequode_favorites'){
                    self::collections('sequode_favorites');
                }elseif(SQDE_Session::is('palette')){
                    $sequode_model = new SQDE_Sequodes;
                    $sequode_model->exists(SQDE_Session::get('palette'),'id');
                    $sequence = array_unique(json_decode($sequode_model->sequence));
                    $nodes = array();
                    foreach($sequence as $id){
                        $sequode_model->exists($id,'id');
                        $nodes[] = '"'.$sequode_model->id.'":{"id":"'.$sequode_model->id.'","n":"'.$sequode_model->name.'"}';
                    }
                    echo '{'.implode(',', $nodes).'}';
                }else{
                    echo '{}';
                }
                return;
			case 'user':
                $account = (object) null;
                $account->username = SQDE_AuthenticatedUser::model()->username;
                echo json_encode($account);
                return;
			case 'sequodes':
                $sequode_model = new SQDE_Sequodes;
                if($key == null){
                    if(SQDE_UserAuthority::isSystemOwner()){
                        $where = array();
                        $sequode_model->getAll($where,'id, process_description_node');
                        $nodes = array();
                        foreach($sequode_model->all as $object){
                            $nodes[] = '"' . $object->id . '":' . $object->process_description_node;
                        }
                    }else{
                        $nodes = array();
                        $where = array();
                        $where[] = array('field'=>'owner_id','operator'=>'!=','value'=>SQDE_AuthenticatedUser::model()->id);
                        $where[] = array('field'=>'shared','operator'=>'=','value'=>'1');
                        $sequode_model->getAll($where,'id, process_description_node');
                        foreach($sequode_model->all as $object){
                            $nodes[] = '"' . $object->id . '":' . $object->process_description_node;
                        }
                        $where = array();
                        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
                        $sequode_model->getAll($where,'id, process_description_node');
                        foreach($sequode_model->all as $object){
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
                SQDE_Sequode::exists($key,'id')
                && SQDE_UserAuthority::canView()
                ){
                    echo  SQDE_Sequode::model()->process_description_node;
                    return;
                }else{
                    echo  '{}';
                    return;
                }
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
    /*
	public static function sequodeModel($sequode_model_id = 0){
        if(!(
        SQDE_Sequode::exists($sequode_model_id, 'id')
        && SQDE_UserAuthority::isSystemOwner()
        )){ return; }
        
        header('Content-Type: text/plain');
		$sequode_model = SQDE_Sequode::model();
		try{
			foreach($sequode_model->members as $member=>$value){
				echo $member;
				echo ":\n";
				echo $sequode_model->$member;
				echo "\n";
			}
		}catch(Exception $e){
			exit;
		}
        exit;
	}
	public static function userModel($user_model_id = 0){
        if(!(
        SQDE_UserAuthority::isSystemOwner()
        && SQDE_User::exists($user_model_id, 'id')
        )){ return; }
        
        header('Content-Type: text/plain');
		$user_model = SQDE_User::model();
		try{
			foreach($user_model->members as $member=>$value){
				echo $member;
				echo ":\n";
				echo $user_model->$member;
				echo "\n";
			}
		}catch(Exception $e){
			exit;
		}
        exit;
	}
    */
}