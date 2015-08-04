<?php
class SQDE_SequodesFinder {
    public static function search($search_object, $limit=100){
        if($search_object->coded == 0 && $search_object->sequenced == 0){
            return array();
        }elseif($search_object->coded == 1 && $search_object->sequenced == 0){
            $shared_where = array('field'=>'usage_type','operator'=>'=','value'=>'0');
        }elseif($search_object->coded == 0 && $search_object->sequenced == 1){
            $shared_where = array('field'=>'usage_type','operator'=>'=','value'=>'1');
        };
        $search_object->position = urldecode($search_object->position);
        if(!in_array($search_object->position, array('=%','%=%','%=','='))){
            $search_object->position = '=%';
        }
        
        if(SQDE_UserAuthority::isSystemOwner()){
            $where = array();
            if(isset($shared_where)){
                $where[] = $shared_where;
            }
            $where[] = array('field'=>'name','operator'=>$search_object->position,'value'=>$search_object->search);
            $sequodes_model = new SQDE_Sequodes;
            $sequodes_model->getAll($where,'id,name',false, $limit);
            $results = $sequodes_model->all;
            unset($sequodes_model);
        }else{
            
            $results = array();
            if($search_object->my_sequodes == 1){
                $where = array();
                if(isset($shared_where)){
                    $where[] = $shared_where;
                }
                $where[] = array('field'=>'name','operator'=>$search_object->position,'value'=>$search_object->search);
                $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
                
                $sequodes_model = new SQDE_Sequodes;
                $sequodes_model->getAll($where,'id,name',false, $limit);
                $results = array_merge($results,$sequodes_model->all);
                unset($sequodes_model);
            }
            if($search_object->shared_sequodes == 1){
                $where = array();
                
                if(isset($shared_where)){
                    $where[] = $shared_where;
                }
                $where[] = array('field'=>'name','operator'=>$search_object->position,'value'=>$search_object->search);
                $where[] = array('field'=>'owner_id','operator'=>'!=','value'=>SQDE_AuthenticatedUser::model()->id);
                $where[] = array('field'=>'shared','operator'=>'=','value'=>'1');
                
                $sequodes_model = new SQDE_Sequodes;
                $sequodes_model->getAll($where,'id,name',false, $limit);
                $results = array_merge($results,$sequodes_model->all);
                unset($sequodes_model);
            }
        }
        return $results;
    }
}