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
        SQDE_AuthenticatedUser::exists(SQDE_Session::get('user_id'),'id');
    }
    public static function updateLastSignIn($time=false, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $modeler::model()->updateField(($time === false) ? time() : $time ,'last_sign_in');
        return $modeler::model();
    }
    public static function login($_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        SQDE_Session::model()->updateField($_model->email,'username');
        SQDE_Session::set('user_id', $_model->id, false);
        SQDE_Session::set('username', $_model->username, false);
        SQDE_Session::set('role_id', $_model->role_id, false);
        SQDE_Session::save();
        self::updateLastSignIn();
        return $modeler::model();
    }
}