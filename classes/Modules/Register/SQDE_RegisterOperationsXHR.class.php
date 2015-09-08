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
        !SQDE_UserAuthority::isAuthenticated()
        && SQDE_User::exists(rawurldecode($input->username),'username')
        && SQDE_UserAuthority::isActive(SQDE_User::model())
        && SQDE_UserAuthority::isPassword(rawurldecode($input->password), SQDE_User::model())
        )){return;}
        SQDE_AuthOperations::login();
        return SQDE_ConsoleRoutes::js(false);
    }
}