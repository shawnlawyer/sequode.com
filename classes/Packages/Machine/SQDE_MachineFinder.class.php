<?php
class SQDE_MachineFinder {
    public static $package = 'Machine';
    public static function search($search_object, $limit=100){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
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
            $_model = new $modeler::$model;
            $_model->getAll($where,'id,name',false, $limit);
            $results = $_model->all;
            unset($_model);
        }else{
            $where = array();
            if(isset($shared_where)){
                $where[] = $shared_where;
            }
            $where[] = array('field'=> $search_object->field,'operator'=>$search_object->position,'value'=>$search_object->search);
            $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
            
            $_model = new $modeler::$model;
            $_model->getAll($where,'id,name',false, $limit);
            $results = $_model->all;
            unset($_model);
        }
        return $results;
    }
}