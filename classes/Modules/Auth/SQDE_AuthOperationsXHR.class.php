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
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        $js = array();
        $input = json_decode(rawurldecode($json));
        if(!(
        (
            $modeler::exists(rawurldecode($input->username),'email')
            || $modeler::exists(rawurldecode($input->username),'username')
        )
        && SQDE_UserAuthority::isActive($modeler::model())
        && SQDE_UserAuthority::isPassword(rawurldecode($input->password), $modeler::model())
        )){return;}
        forward_static_call_array(array($operations,'login'),array())
        return SQDE_ConsoleRoutes::js(false);
    }
}