<?php
class SQDE_AuthOperations {
    public static $package = 'Auth';
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
    public static function updateLastSignIn($time=false, $user_model = null){
        if($user_model != null ){ SQDE_User::model($user_model); }
        SQDE_User::model()->updateField(($time === false) ? time() : $time ,'last_sign_in');
        return SQDE_User::model();
    }
    public static function login($user_model = null){
        if($user_model == null ){ $user_model = SQDE_User::model(); }
        SQDE_AuthenticatedUser::model($user_model);
        SQDE_Session::model()->updateField($user_model->email,'username');
        SQDE_Session::set('user_id', $user_model->id, false);
        SQDE_Session::set('username', $user_model->username, false);
        SQDE_Session::set('role_id', $user_model->role_id, false);
        SQDE_Session::save();
        return SQDE_AuthenticatedUser::model();
    }
}