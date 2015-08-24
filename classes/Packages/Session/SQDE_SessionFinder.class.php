<?php
class SQDE_SessionFinder {
    public static $package = 'Session';
    public static function search($search_object, $limit=100){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
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
        $_model = new $modeler::$model;
        $_model->getAll($where,'id, username',false, $limit);
        $results = array_merge($results,$_model->all);
        unset($sessions_model);
        return $results;
    }
}