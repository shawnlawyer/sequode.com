<?php
class SQDE_TokenFinder {
    public static $package = 'Token';
    public static function search($_i, $limit=100){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $_i->position = urldecode($_i->position);
        //$_i->field = urldecode($_i->field);
        if(!in_array($_i->position, array('=%','%=%','%=','='))){
            $_i->position = '=%';
        }
       // if(!in_array($_i->field, array('name','ip_address'))){
            $_i->field = 'name';
        //}
        
        if(SQDE_UserAuthority::isSystemOwner()){
            $where = array();
            if(isset($shared_where)){
                $where[] = $shared_where;
            }
            $where[] = array('field'=> $_i->field,'operator'=>$_i->position,'value'=>$_i->search);
            $_model = new $modeler::$model;
            $_model->getAll($where,'id,name',false, $limit);
            $results = $_model->all;
            unset($_model);
        }else{
            $where = array();
            if(isset($shared_where)){
                $where[] = $shared_where;
            }
            $where[] = array('field'=> $_i->field,'operator'=>$_i->position,'value'=>$_i->search);
            $where[] = array('field'=>'owner_id','operator'=>'=','value'=>SQDE_AuthenticatedUser::model()->id);
            
            $_model = new $modeler::$model;
            $_model->getAll($where,'id,name',false, $limit);
            $results = $_model->all;
            unset($_model);
        }
        return $results;
    }
}