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
        if(!SQDE_Session::is('registration_step')){return;}
        $steps = array();
        $steps[] = (object) array('operations'=> array('email'));
        $steps[] = (object) array('operations'=> array('verify'));
        $steps[] = (object) array('operations'=> array('terms'));

        $operations_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->operations;
        foreach($steps[SQDE_Session::get('registration_step')]->operations as $operation){
            forward_static_call_array(array($operations_xhr, $operation),array($json));
        }
        
        $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
        $js[] = forward_static_call_array(array($cards_xhr,__FUNCTION__),array());
        return implode(' ', $js);  
    }
    public static function email($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $js = array();
        $input = json_decode(rawurldecode($json));
        //if(!(
        //&& !$modeler::exists(rawurldecode($input->email),'email')
       //)){return;}
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        return forward_static_call_array(array($operations,__FUNCTION__),array(rawurldecode($input->email)));
    }
    public static function verify($json){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $js = array();
        $input = json_decode(rawurldecode(rawurldecode($json)));
        if(!(
        $modeler::exists($input->token,'activation_token')
        //&& $modeler::model()->active == 0
        )){return;}
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        return forward_static_call_array(array($operations,__FUNCTION__),array());
    }
    public static function terms($json){
        $input = json_decode(rawurldecode(rawurldecode($json)));
        if(!(
            intval($input->accept) != 1
        )){return;}
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        return forward_static_call_array(array($operations,__FUNCTION__),array($input->accept));
    }
}