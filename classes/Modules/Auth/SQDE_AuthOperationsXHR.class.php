<?php
class SQDE_AuthOperationsXHR {
    public static $package = 'Auth';
	public static $merge = false;
	public static $routes = array(
		'login',
        'reset'
	);
	public static $routes_to_methods = array(
		'login' => 'main',
		'reset' => 'reset'
    );
    public static function main(){
        if(!SQDE_Session::is('auth_step')){return;}
        $steps = array(
            (object) array(
                'prep' => 'verifyLogin',
                'operation' => 'storeLogin'
            ),
            (object) array(
                'prep' => 'verifySecret',
                'operation' => 'login'
            )
        );
        $step = $steps[SQDE_Session::get('auth_step')];
        $operations_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->operations;
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        $parameters = forward_static_call_array(array($operations_xhr, $step->prep), func_get_args());
        if(!(
            is_array($parameters)
            && forward_static_call_array(array($operations, $step->operation),$parameters)
        )){
            return;
        }
        SQDE_Session::set('auth_step', SQDE_Session::get('auth_step') + 1);
        $js = array();
        if(count($steps) <= intval($step)){
           $js[] =  SQDE_ConsoleRoutes::js(false);
        }else{
            $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
            $js[] = forward_static_call_array(array($cards_xhr,'login'),array());
        }
        return implode(' ', $js);  
    }
    public static function verifyLogin($json){
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
        )){return;}
        forward_static_call_array(array($operations,'login'),array());
        return array();
    }
    public static function verifySecret($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $modeler::exists(SQDE_Session::get('auth_id'), 'id');
        $modeler::model()->updateField(self::generateHash($value),'password');
        $input = json_decode(rawurldecode($json));
        if(!(
            SQDE_UserAuthority::isPassword(rawurldecode($input->secret), $modeler::model())
        )){return;}
        return array();
    }
}