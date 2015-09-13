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
            (object) array(
                //'prep'=> array('setEmailAddress'),
                'operations'=> array('setEmailAddress')
                
                ),
            (object) array('operations'=> array('setPassword')),
            (object) array('operations'=> array('acceptTerms')),
            (object) array('operations'=> array('verifyToken'))
        );
        $operations_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->operations;
        foreach($steps[SQDE_Session::get('registration_step')]->operations as $operation){
            forward_static_call_array(array($operations_xhr, $operation),array($json));
        }
        
        $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
        $js[] = forward_static_call_array(array($cards_xhr,'signup'),array());
        return implode(' ', $js);  
    }
    public static function setEmailAddress($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $js = array();
        $input = json_decode(rawurldecode($json));
        //if(!(
        //&& !$modeler::exists(rawurldecode($input->email),'email')
        //)){return false;}
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        return forward_static_call_array(array($operations,'setEmailAddress'), array(rawurldecode($input->email)));
    }
    public static function setPassword($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $js = array();
        $input = json_decode(rawurldecode($json));
        if(!(
            rawurldecode($input->password) == rawurldecode($input->confirm_password)
            && SQDE_UserAuthority::isSecurePassword(rawurldecode($input->password))
        )){return false;}
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        return forward_static_call_array(array($operations,'setPassword'),array($input->password));
    }
    public static function acceptTerms($json){
        $input = json_decode(rawurldecode(rawurldecode($json)));
        if(!(
            intval($input->accept) != 1
        )){return false;}
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        return forward_static_call_array(array($operations,'sendToken'),array());
    }
    public static function verifyToken($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $js = array();
        $input = json_decode(rawurldecode(rawurldecode($json)));
        if(!(
        $modeler::exists($input->token,'activation_token')
        && $modeler::model()->active == 0
        )){return false;}
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        return forward_static_call_array(array($operations,__FUNCTION__),array());
    }
}