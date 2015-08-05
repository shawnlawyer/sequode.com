<?php
class SQDE_PackagesFinder {
    public static function search($search_object, $limit=100){
        
        $search_object->position = urldecode($search_object->position);
        //$search_object->field = urldecode($search_object->field);
        if(!in_array($search_object->position, array('=%','%=%','%=','='))){
            $search_object->position = '=%';
        }
       // if(!in_array($search_object->field, array('name','ip_address'))){
            $search_object->field = 'name';
        //}
        
        if(SQDE_UserAuthority::isSystemOwner()){
            $where = array();
            if(isset($shared_where)){
                $where[] = $shared_where;
            }
            $where[] = array('field'=> $search_object->field,'operator'=>$search_object->position,'value'=>$search_object->search);
            $machines_model = new SQDE_Packages;
            $machines_model->getAll($where,'id,name',false, $limit);
            $results = $machines_model->all;
            unset($machines_model);
        }else{
            $where = array();
            if(isset($shared_where)){
                $where[] = $shared_where;
            }
            $where[] = array('field'=> $search_object->field,'operator'=>$search_object->position,'value'=>$search_object->search);
            $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
            
            $machines_model = new SQDE_Packages;
            $machines_model->getAll($where,'id,name',false, $limit);
            $results = $machines_model->all;
            unset($machines_model);
        }
        return $results;
    }
}