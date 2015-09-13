<?php
class SQDE_AuthOperationsXHR {
    public static $package = 'Auth';
	public static $merge = false;
	public static $routes = array(
		'login'
	);
	public static $routes_to_methods = array(
		'login' => 'main'
    );
    public static function main($json){
        $js = array();
        $input = json_decode(rawurldecode($json));
        if(!(
        (
            SQDE_User::exists(rawurldecode($input->username),'email')
            || SQDE_User::exists(rawurldecode($input->username),'username')
        )
        && SQDE_UserAuthority::isActive(SQDE_User::model())
        && SQDE_UserAuthority::isPassword(rawurldecode($input->password), SQDE_User::model())
        )){return;}
        if(!(
        SQDE_UserAuthority::isActive(SQDE_User::model())
        && SQDE_UserAuthority::isPassword(rawurldecode($input->password), SQDE_User::model())
        )){return;}
        SQDE_AuthOperations::login();
        return SQDE_ConsoleRoutes::js(false);
    }
}