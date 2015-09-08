<?php
class SQDE_RegisterOperations {
    public static $package = 'Register';
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
    public static function signup($username, $password, $email, $_model = null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $modeler::model()->create($username,self::generateHash($password),$email);
        $modeler::exists($modeler::model()->id, 'id');
        $modeler::model()->create(substr(SQDE_Session::uniqueHash(),0,15), SQDE_Session::uniqueHash(), substr(SQDE_Session::uniqueHash(),0,15));
        $modeler::exists($modeler::model()->id, 'id');
        $modeler::model()->updateField('[]','sequode_favorites');
        $modeler::model()->updateField('100','role_id');
        $modeler::model()->updateField('33','allowed_sequode_count');
        $modeler::model()->updateField('1','active');
        return $modeler::model();
    }
}