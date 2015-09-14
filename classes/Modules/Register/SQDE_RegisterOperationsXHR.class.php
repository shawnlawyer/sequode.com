<?php
class SQDE_RegisterOperationsXHR {
    public static $package = 'Register';
	public static $merge = false;
	public static $routes = array(
		'signup'
	);
	public static $routes_to_methods = array(
		'signup' => 'main'
    );
    public static function main(){
        if(!SQDE_Session::is('registration_step')){return;}
        $steps = array(
            (object) array(
                'prep' => 'verifyEmailAddress',
                'operation' => 'setEmailAddress'
            ),
            (object) array(
                'prep' => 'verifyPassword',
                'operation' => 'setPassword'
            ),
            (object) array(
                'prep' => 'verifyAccept',
                'operation' => 'sendToken'
            ),
            (object) array(
                'prep' => 'verifyToken',
                'operation' => 'setActive'
            )
        );
        $step = $steps[SQDE_Session::get('registration_step')];
        $operations_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->operations;
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        $parameters = forward_static_call_array(array($operations_xhr, $step->prep), func_get_args());
        if(!(
            is_array($parameters)
            && forward_static_call_array(array($operations, $step->operation),$parameters)
        )){
            return;
        }
        SQDE_Session::set('registration_step', SQDE_Session::get('registration_step') + 1);
        $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
        $js[] = forward_static_call_array(array($cards_xhr,'signup'),array());
        return implode(' ', $js);  
    }
    public static function verifyEmailAddress($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $input = json_decode(rawurldecode($json));
        if(!(
        !$modeler::exists(rawurldecode($input->email),'email')
        && SQDE_UserAuthority::isAnEmailAddress(rawurldecode($input->email))
        )){return false;}
        return array(rawurldecode($input->email));
    }
    public static function verifyPassword($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $input = json_decode(rawurldecode($json));
        if(!(
            rawurldecode($input->password) == rawurldecode($input->confirm_password)
            && SQDE_UserAuthority::isSecurePassword(rawurldecode($input->password))
        )){return false;}
        return array(rawurldecode($input->password));
    }
    public static function verifyAccept($json){
        $input = json_decode(rawurldecode($json));
        if(!(
            intval($input->accept) == 1
        )){return false;}
        return array();
    }
    public static function verifyToken($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $input = json_decode(rawurldecode($json));
        if(!(
            $modeler::exists($input->token,'activation_token')
            && $modeler::model()->activation_token == SQDE_Session::get('registration_token')
            && $modeler::model()->active == 0
        )){return false;}
        return array();
    }
    
}