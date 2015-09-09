<?php
class SQDE_RegisterOperationsXHR {
    public static $package = 'Register';
	public static $merge = false;
	public static $routes = array(
		'signup'
	);
	public static $routes_to_methods = array(
		'signup' => 'signup'
    );
    public static function signup($json){
        $js = array();
        $input = json_decode(rawurldecode($json));
        if(!(
        !SQDE_User::exists(rawurldecode($input->username),'username')
        //&& !SQDE_User::exists(rawurldecode($input->email),'email')
        //&& SQDE_UserAuthority::isSecurePassword(rawurldecode($input->password))
        )){return;}
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
        forward_static_call_array(array($operations,__FUNCTION__),array(rawurldecode($input->username),rawurldecode($input->password),rawurldecode($input->email)));
        $js[] = forward_static_call_array(array($cards_xhr,'verify'),array());
        $js[] = 'alert(\'check email\');';
        return implode(' ', $js);
    }
    public static function verify($json){
        $js = array();
        $input = json_decode(rawurldecode($json));
        if(!(
        SQDE_User::exists(rawurldecode($input->token),'activation_token')
        && SQDE_User::model()->active == 0
        )){return;}
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        forward_static_call_array(array($operations,__FUNCTION__),array(rawurldecode(SQDE_User::model())));
        $js[] = forward_static_call_array(array($cards_xhr,'signup'),array());
        $js[] = 'alert(\'account verified\');';
        return implode(' ', $js);
    }
}