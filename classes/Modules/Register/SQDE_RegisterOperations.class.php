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
    public static function signupold($username, $password, $email){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $modeler::model()->create($username,self::generateHash($password),$email);
        $modeler::exists($modeler::model()->id, 'id');
        $modeler::model()->updateField('[]','sequode_favorites');
        $modeler::model()->updateField('100','role_id');
        $modeler::model()->updateField('33','allowed_sequode_count');
        $modeler::model()->updateField('0','active');
        $activation_url = $_SERVER['HTTP_HOST'] . '?token=' . $modeler::model()->activation_token;
        $hooks = array(
            "searchStrs" => array('#ACTIVATION-URL#','#USERNAME#'),
            "subjectStrs" => array($activation_url,$modeler::model()->username)
        );
        SQDE_Session::set('registration_step',SQDE_Session::get('registration_step') + 1);
        SQDE_Mailer::systemSend($modeler::model()->email,'Activate Your Sequode Account',SQDE_Mailer::makeTemplate('activation.txt',$hooks));
        return $modeler::model();
    }
    public static function email($email){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $modeler::model()->create(self::generateHash($email),self::generateHash($email),$email);
        $modeler::exists($modeler::model()->id, 'id');
        $modeler::model()->updateField('[]','sequode_favorites');
        $modeler::model()->updateField('100','role_id');
        $modeler::model()->updateField('100','allowed_sequode_count');
        $modeler::model()->updateField('0','active');
        $activation_token = $modeler::model()->activation_token;
        $hooks = array(
            "searchStrs" => array('#ACTIVATION-URL#','#USERNAME#'),
            "subjectStrs" => array($activation_token,'')
        );
        SQDE_Session::set('registration_step',SQDE_Session::get('registration_step') + 1);
        SQDE_Mailer::systemSend($modeler::model()->email,'Verify your email address with sequode.com',SQDE_Mailer::makeTemplate('activation.txt',$hooks));
        return $modeler::model();
    }
    public static function signup($email){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $modeler::model()->create(self::generateHash($email),self::generateHash($email),$email);
        $modeler::exists($modeler::model()->id, 'id');
        $modeler::model()->updateField('[]','sequode_favorites');
        $modeler::model()->updateField('100','role_id');
        $modeler::model()->updateField('100','allowed_sequode_count');
        $modeler::model()->updateField('0','active');
        $activation_token = $modeler::model()->activation_token;
        $hooks = array(
            "searchStrs" => array('#ACTIVATION-URL#','#USERNAME#'),
            "subjectStrs" => array($activation_token,'')
        );
        SQDE_Session::set('registration_step',SQDE_Session::get('registration_step') + 1);
        SQDE_Mailer::systemSend($modeler::model()->email,'Verify your email address with sequode.com',SQDE_Mailer::makeTemplate('activation.txt',$hooks));
        return $modeler::model();
    }
    public static function verify($_model=null){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        ($_model == null) ? forward_static_call_array(array($modeler,'model'),array()) : forward_static_call_array(array($modeler,'model'),array($_model));
        $modeler::model()->updateField('1','active');
        SQDE_Session::set('registration_step',SQDE_Session::get('registration_step') + 1);
        return $modeler::model();
    }
    /*
    public static function activate($activation_token){
        if(SQDE_User::exists($activation_token,'activation_token') && SQDE_User::model()->active == 0 ){
            SQDE_User::model(SQDE_UserOperations::activate(SQDE_User::model()));
            return true;
        }
        return false;
    }
    public static function recoverActivation($username){
        $activation_url = $_SERVER['HTTP_HOST'] . $routes['activate']->url . '?token=' . SQDE_User::model()->activation_token;
        $hooks = array(
            "searchStrs" => array('#ACTIVATION-URL#','#USERNAME#'),
            "subjectStrs" => array($activation_url,SQDE_User::model()->username)
        );
        SQDE_Mailer::systemSend(SQDE_User::model()->email,'Activate Your Sequode Account',SQDE_Mailer::makeTemplate('activation.txt',$hooks));
    }
    public static function resetPassword(){
        $password = substr(SQDE_UserOperations::uniqueHash(),3,12);
        $password_hash = SQDE_UserOperations::generateHash();
        $hooks = array(
                "searchStrs" => array('#GENERATED-PASS#','#USERNAME#'),
                "subjectStrs" => array($password,SQDE_User::model()->username)
        );
        SQDE_Mailer::systemSend(SQDE_User::model()->email,'Your new password',SQDE_Mailer::makeTemplate('password.txt',$hooks));
    }
    public static function register($username, $password, $email){
        //if(  !SQDE_User::model()->exists($email,'email') &&  !SQDE_User::exists($username,'username')){
        if(  !SQDE_User::model()->exists($email,'email') && !SQDE_User::exists($username,'username')){
            SQDE_User::model(SQDE_UserOperations::register($username,$password,$email));
            $activation_url = $_SERVER['HTTP_HOST'] . $routes['activate']->url . '?token=' . SQDE_User::model()->activation_token;
            $hooks = array(
                "searchStrs" => array('#ACTIVATION-URL#','#USERNAME#'),
                "subjectStrs" => array($activation_url,SQDE_User::model()->username)
            );
            SQDE_Mailer::systemSend(SQDE_User::model()->email,'Activate Your Sequode Account',SQDE_Mailer::makeTemplate('activation.txt',$hooks));
			return true;
        }
        return false;
    }
    public static function updatePassword($password, $new_password, $confirm_password){
        if(SQDE_Session::is('username') && SQDE_User::exists(SQDE_Session::get('username'),'username') && SQDE_UserAuthority::isActive() && SQDE_UserAuthority::isPassword($password)){
            SQDE_User::model(SQDE_UserOperations::updatePassword($new_password));
            return true;
        }
        return false;
    }
    */
}