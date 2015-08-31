<?php
class SQDE_SequodeFinder {
    public static $package = 'Sequode';
    public static function search($_i, $limit=100){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if($_i->coded == 0 && $_i->sequenced == 0){
            return array();
        }elseif($_i->coded == 1 && $_i->sequenced == 0){
            $shared_where = array('field'=>'usage_type','operator'=>'=','value'=>'0');
        }elseif($_i->coded == 0 && $_i->sequenced == 1){
            $shared_where = array('field'=>'usage_type','operator'=>'=','value'=>'1');
        };
        $_i->position = urldecode($_i->position);
        if(!in_array($_i->position, array('=%','%=%','%=','='))){
            $_i->position = '=%';
        }
        if(SQDE_UserAuthority::isSystemOwner()){
            $where = array();
            if(isset($shared_where)){
                $where[] = $shared_where;
            }
            $where[] = array('field'=>'name','operator'=>$_i->position,'value'=>$_i->search);
            $_model = new $modeler::$model;
            $_model->getAll($where,'id,name',false, $limit);
            $results = $_model->all;
            unset($_model);
        }else{
            $results = array();
            if($_i->my_sequodes == 1){
                $where = array();
                if(isset($shared_where)){
                    $where[] = $shared_where;
                }
                $where[] = array('field'=>'name','operator'=>$_i->position,'value'=>$_i->search);
                $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
                
                $_model = new $modeler::$model;
                $_model->getAll($where,'id,name',false, $limit);
                $results = array_merge($results,$_model->all);
                unset($_model);
            }
            if($_i->shared_sequodes == 1){
                $where = array();
                
                if(isset($shared_where)){
                    $where[] = $shared_where;
                }
                $where[] = array('field'=>'name','operator'=>$_i->position,'value'=>$_i->search);
                $where[] = array('field'=>'owner_id','operator'=>'!=','value'=>SQDE_AuthenticatedUser::model()->id);
                $where[] = array('field'=>'shared','operator'=>'=','value'=>'1');
                
                $_model = new $modeler::$model;
                $_model->getAll($where,'id,name',false, $limit);
                $results = array_merge($results,$_model->all);
                unset($_model);
            }
        }
        return $results;
    }
}