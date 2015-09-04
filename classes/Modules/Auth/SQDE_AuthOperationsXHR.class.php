<?php
class SQDE_AuthOperationsXHR {
    public static $package = 'Auth';
	public static $merge = false;
	public static $routes = array(
		'login'
		//'guest'
	);
	public static $routes_to_methods = array(
		'login' => 'login'
		 //'guest' => 'guest',
    );
    public static function login($json){
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
    public static function guest($json){
        $js = array();
        $input = json_decode(rawurldecode($json));
        if(intval($input->accept) == 1){
            SQDE_AuthOperations::login(SQDE_UserOperations::newGuest());
            return SQDE_ConsoleRoutes::js(false);
        }
    }
}