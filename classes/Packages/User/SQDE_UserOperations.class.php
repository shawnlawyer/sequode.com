<?php
class SQDE_UserOperations {

	public static function uniqueHash($seed='',$prefix='SQDE'){
		$time = explode(' ', microtime());
        $time = $time[0] + $time[1];
		return $prefix.md5($time.$seed);
	}
	public static function generateHash($text, $salt = null){
        if ($salt === null){
            $salt = substr(md5(uniqid(rand(), true)), 0, 25);
        }else{
            $salt = substr($salt, 0, 25);
        }
        return $salt . sha1($salt . $text);
    }
    public static function load(){
        if(SQDE_Session::isCookieValid() && SQDE_Session::exists(SQDE_Session::model()->session_id, 'session_id')){
            SQDE_User::exists(SQDE_Session::get('user_id'),'id');
            SQDE_AuthenticatedUser::exists(SQDE_Session::get('user_id'),'id');
        }
    }
	public static function getMachinesCount($user_model = null){
        if($user_model != null ){ SQDE_User::model($user_model); }
        $machine_model = new SQDE_Machine::$model;
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>$user_model->id);
        $machine_model->getCount($where, 'id');
        return intval($machine_model->results_count);
	}
	public static function getMachinesModelOfAllMachines($user_model = null, $fields='id'){
        if($user_model != null ){ SQDE_User::model($user_model); }
        $machine_model = new SQDE_Machine::$model;
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>$user_model->id);
        $machine_model->getAll($where, $fields);
        return $machine_model;
	}
	public static function getSequodesModelOfAllSequencedSequodes($user_model = null, $fields='id'){
        if($user_model != null ){ SQDE_User::model($user_model); }
        $sequode_model = new SQDE_Sequode::$model;
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>$user_model->id);
        $where[] = array('field'=>'usage_type','operator'=>'=','value'=>1);
        $sequode_model->getAll($where, $fields);
        return $sequode_model;
	}
	public static function getSequodesModelOfAllSequodes($user_model = null, $fields='id'){
        if($user_model != null ){ SQDE_User::model($user_model); }
        $sequode_model = new SQDE_Sequode::$model;
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>$user_model->id);
        $sequode_model->getAll($where, $fields);
        return $sequode_model;
	}
	public static function getSequodesCount($user_model = null){
        if($user_model != null ){ SQDE_User::model($user_model); }
        $sequode_model = new SQDE_Sequode::$model;
        $where = array();
        $where[] = array('field'=>'owner_id','operator'=>'=','value'=>$user_model->id);
        $sequode_model->getCount($where, 'id');
        return intval($sequode_model->results_count);
	}
    public static function updateActive($active = 0, $user_model = null){
        if($user_model != null ){ SQDE_User::model($user_model); }
        $active = (intval($active) == 1) ? 1 : 0;
        SQDE_User::model()->updateField($active,'active');
        return SQDE_User::model();
    }
    public static function register($username, $password, $email, $user_model = null){
        if($user_model != null ){ SQDE_User::model($user_model); }
        SQDE_User::model()->create($username,self::generateHash($password),$email);
        SQDE_User::exists(SQDE_User::model()->id, 'id');
        SQDE_User::model(self::unactive());
        return SQDE_User::model();
    }
    public static function updateLastSignIn($time=false, $user_model = null){
        if($user_model != null ){ SQDE_User::model($user_model); }
        SQDE_User::model()->updateField(($time === false) ? time() : $time ,'last_sign_in');
        return SQDE_User::model();
    }
    public static function updateDomain($domain, $user_model = null){
        if($user_model != null ){ SQDE_User::model($user_model); }
        SQDE_User::model()->updateField($domain,'domain');
        return SQDE_User::model();
    }
    public static function updateEmail($email, $user_model = null){
        if($user_model != null ){ SQDE_User::model($user_model); }
        SQDE_User::model()->updateField($email,'email');
        return SQDE_User::model();
    }
    public static function updatePassword($password, $user_model = null){
        if($user_model != null ){ SQDE_AuthenticatedUser::model($user_model); }
        SQDE_User::model()->updateField(self::generateHash($password),'password');
        return SQDE_User::model();
    }
    public static function updateName($username, $user_model = null){
        if($user_model != null ){ SQDE_AuthenticatedUser::model($user_model); }
        SQDE_User::model()->updateField($username, 'username');
        return SQDE_User::model();
    }
    public static function emptySequodeFavorites($user_model = null){
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
        $user_model->updateField('[]','sequode_favorites');
        return SQDE_User::model($user_model);
    }
    public static function addToSequodeFavorites($sequode_model = null, $user_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
		$palette = json_decode($user_model->sequode_favorites);
		$palette[] = SQDE_Sequode::model()->id;
        $user_model->updateField(json_encode(array_unique($palette)),'sequode_favorites');
        return SQDE_User::model($user_model);
    }
    public static function removeFromSequodeFavorites($sequode_model = null, $user_model = null){
        if($sequode_model != null ){ SQDE_Sequode::model($sequode_model); }
        if($user_model == null ){ $user_model = SQDE_AuthenticatedUser::model(); }
		$palette = json_decode(SQDE_User::model()->sequode_favorites);
        $array = array();
		foreach($palette as $value){
			if(intval($value) != SQDE_Sequode::model()->id){
				$array[] = $value;
			}
		}
        $user_model->updateField(json_encode($array),'sequode_favorites');
        return SQDE_User::model($user_model);
    }
    
    public static function login($user_model = null){
        if($user_model == null ){ $user_model = SQDE_User::model(); }
        SQDE_AuthenticatedUser::model($user_model);
        SQDE_Session::model()->updateField($user_model->username,'username');
        SQDE_Session::set('user_id', $user_model->id, false);
        SQDE_Session::set('username', $user_model->username, false);
        SQDE_Session::set('role_id', $user_model->role_id, false);
        SQDE_Session::save();
        return SQDE_AuthenticatedUser::model();
    }
    public static function newUser(){
        SQDE_User::model()->create(substr(SQDE_Session::uniqueHash(),0,15), SQDE_Session::uniqueHash(), substr(SQDE_Session::uniqueHash(),0,15));
        SQDE_User::exists(SQDE_User::model()->id, 'id');
        SQDE_User::model()->updateField('[]','sequode_favorites');
        SQDE_User::model()->updateField('sequo.de','domain');
        SQDE_User::model()->updateField('100','role_id');
        SQDE_User::model()->updateField('33','allowed_sequode_count');
        SQDE_User::model()->updateField('1','active');
        return SQDE_User::model();
    }
    public static function newGuest(){
        SQDE_User::model()->create(substr(SQDE_Session::uniqueHash(),0,15), SQDE_Session::uniqueHash(), substr(SQDE_Session::uniqueHash(),0,15));
        SQDE_User::exists(SQDE_User::model()->id, 'id');
        SQDE_User::model()->updateField('[]','sequode_favorites');
        SQDE_User::model()->updateField('sequo.de','domain');
        SQDE_User::model()->updateField('101','role_id');
        SQDE_User::model()->updateField('5','allowed_sequode_count');
        SQDE_User::model()->updateField('1','active');
        return SQDE_User::model();
    }
    public static function delete($user_model = null){
        if($user_model == null ){ $user_model = SQDE_User::model(); }
        if(!($user_model->id != 1 && $user_model->id != 2 && $user_model->role_id > 99)){
            return SQDE_User::model($user_model);
        }
        $sequodes_model = self::getSequodesModelOfAllSequencedSequodes($user_model);
        foreach($sequodes_model->all as $object){
            $sequodes_model->delete($object->id);
        }
        $user_model->delete($user_model->id);
        return SQDE_User::model($user_model);
    }
    public static function updateRole($role_model = null, $user_model = null){
        if($role_model == null ){ $role_model = SQDE_Role::model(); }
        if($user_model == null ){ $user_model = SQDE_User::model(); }
        $user_model->updateField($role_model->id,'role_id');
        return SQDE_User::model($user_model);
    }

}