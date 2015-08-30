<?php
class SQDE_UserFinder {
    public static function search($search_object, $limit=100){
        
        $search_object->position = urldecode($search_object->position);
        $search_object->field = urldecode($search_object->field);
        if(!in_array($search_object->position, array('=%','%=%','%=','='))){
            $search_object->position = '=%';
        }
        if(!in_array($search_object->field, array('username','email'))){
            $search_object->field = 'username';
        }
        $results = array();
        $where = array();
        if($search_object->active != 'all'){
            $where[] = array('field'=>'active','operator'=>'=','value'=>$search_object->active);
        }
        if($search_object->role != 'all'){
            $where[] = array('field'=>'role_id','operator'=>'=','value'=>$search_object->role);
        }
        $where[] = array('field'=>$search_object->field,'operator'=>$search_object->position,'value'=>$search_object->search);
        $users_model = new SQDE_User;
        $users_model->getAll($where,'id,username',false, $limit);
        $results = array_merge($results,$users_model->all);
        unset($users_model);
        return $results;
    }
}