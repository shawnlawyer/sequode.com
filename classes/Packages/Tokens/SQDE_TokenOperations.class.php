<?php
class SQDE_TokenOperations {
    public static function getModel($value = null, $by = null, $owner_id = null){
        $_model = new SQDE_Token::$model;
        switch($by){
            case 'id':
            case 'name':
                break;
            default:
                $by = 'id';
                break;
        }
        if($value != null){
            $where[] = array('field'=>$by,'operator'=>'=','value'=>$value);
        }
        if($owner_id != null){
            $where[] = array('field'=>'owner_id','operator'=>'=','value'=>$owner_id);
        }
        $_model->getAll($where,'id',false,1);
        $id = false;
        foreach($_model->all as $key => $object){
            $id = $object->id;
			break;
        }
        if($id != false){
            SQDE_Token::exists($id,'id');
            return SQDE_Token::model();
        }
        return false;   
	}
    public static function updateName($name, $_model = null){
        if($_model != null ){ SQDE_Token::model($_model); }
        SQDE_Token::model()->updateField(str_replace(" ","_",$name),'name');
        return SQDE_Token::model();
    }
    public static function newToken($owner = 0){
        SQDE_Token::model()->create();
        SQDE_Token::exists(SQDE_Token::model()->id,'id');
        SQDE_Token::model()->updateField(substr(SQDE_Session::uniqueHash('tokens','SQDETOK'),0,15),'name');
        SQDE_Token::model()->updateField($owner,'owner_id');
        return SQDE_Token::model();
	}
    public static function delete($_model = null){
        if($_model != null ){ SQDE_Token::model($_model); }
        SQDE_Token::model()->delete(SQDE_Token::model()->id);
        return SQDE_Token::model();
    }
}