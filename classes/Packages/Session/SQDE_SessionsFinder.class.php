<?php
class SQDE_SessionsFinder {
    public static function search($search_object, $limit=100){
        
        $search_object->position = urldecode($search_object->position);
        $search_object->field = urldecode($search_object->field);
        if(!in_array($search_object->position, array('=%','%=%','%=','='))){
            $search_object->position = '=%';
        }
        if(!in_array($search_object->field, array('username','ip_address'))){
            $search_object->field = 'username';
        }
        $results = array();
        $where = array();
        $where[] = array('field'=>$search_object->field,'operator'=>$search_object->position,'value'=>$search_object->search);
        $sessions_model = new SQDE_Sessions;
        $sessions_model->getAll($where,'id, username',false, $limit);
        $results = array_merge($results,$sessions_model->all);
        unset($sessions_model);
        return $results;
    }
}