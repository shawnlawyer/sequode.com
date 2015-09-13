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
    public static function main($json){
        if(!SQDE_Session::is('registration_step')){return;}
        $steps = array(
                    array(
                        (object) array(
                            'prep' => 'setEmailAddress',
                            'operation' => 'setEmailAddress')
                        )
                    ),
                    array(
                        (object) array(
                            'prep' => 'setPassword',
                            'operation' => 'setPassword')
                        )
                    ),
                    array(
                        (object) array(
                            'prep' => 'acceptTerms',
                            'operation' => 'sendToken')
                        )
                    ),
                    array(
                        (object) array(
                            'prep' => 'verifyToken',
                            'operation' => 'verifyToken')
                        )
                    )
                );
        $operations_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->operations;
        foreach($steps[SQDE_Session::get('registration_step')] as $step){
            $parameters = forward_static_call_array(array($operations_xhr, $step->prep),array($json));
            if($parameters == false){
                return;
            }
            if(forward_static_call_array(array($operations_xhr, $step->operation),array($json)) == false){
                return;
            }
        }
        SQDE_Session::set('registration_step', SQDE_Session::get('registration_step') + 1);
        $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
        $js[] = forward_static_call_array(array($cards_xhr,'signup'),array());
        return implode(' ', $js);  
    }
    public static function setEmailAddress($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $input = json_decode(rawurldecode($json));
        //if(!(
        //&& !$modeler::exists(rawurldecode($input->email),'email')
        //)){return false;}
        return array(rawurldecode($input->email));
    }
    public static function setPassword($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $input = json_decode(rawurldecode($json));
        if(!(
            rawurldecode($input->password) == rawurldecode($input->confirm_password)
            && SQDE_UserAuthority::isSecurePassword(rawurldecode($input->password))
        )){return false;}
        return array(rawurldecode($input->email));
    }
    public static function acceptTerms($json){
        $input = json_decode(rawurldecode(rawurldecode($json)));
        if(!(
            intval($input->accept) == 1
        )){return false;}
        return array();
    }
    public static function verifyToken($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $input = json_decode(rawurldecode(rawurldecode($json)));
        if(!(
        $modeler::exists($input->token,'activation_token')
        && $modeler::model()->active == 0
        )){return false;}
        return array();
    }
    
}