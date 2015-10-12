<?php
class SQDE_RegisterOperationsXHR {
    public static $package = 'Register';
	public static $merge = false;
	public static $routes = array(
		'signup',
        'reset'
	);
	public static $routes_to_methods = array(
		'signup' => 'signupDialog',
		'reset' => 'reset'
    );
	public static $dialogs = array(
        'signup' => array(
            'steps' => array(
                array(
                    'prep' => 'verifyEmailAddress',
                    'operation' => 'setEmailAddress'
                ),
                array(
                    'prep' => 'verifyPassword',
                    'operation' => 'setPassword'
                ),
                array(
                    'prep' => 'verifyAccept',
                    'operation' => 'sendToken'
                ),
                array(
                    'prep' => 'verifyToken',
                    'operation' => 'setActive'
                )
            )
        )
    );
    
    public static function signupDialog(){
        
        $step = (object) static::$dialogs['signup']['steps'][SQDE_Session::get('registration_step')];
        $operations_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->operations;
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        $parameters = forward_static_call_array(array($operations_xhr, 'signupPrep'), func_get_args());
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
    public static function signupPrep($json = null){
        if(!SQDE_Session::is('registration_step')){return;}
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $input = json_decode(rawurldecode($json));
        $step = (object) static::$dialogs['signup']['steps'][SQDE_Session::get('registration_step')];
        switch($step->prep){
            case 'verifyEmailAddress':
                if(
                    !$modeler::exists(rawurldecode($input->email),'email')
                    && SQDE_UserAuthority::isAnEmailAddress(rawurldecode($input->email))
                ){return array(rawurldecode($input->email));}
            case 'verifyPassword':
                if(
                    rawurldecode($input->password) == rawurldecode($input->confirm_password)
                    && SQDE_UserAuthority::isSecurePassword(rawurldecode($input->password))
                ){return array(rawurldecode($input->password));}
            case 'verifyAccept':
                if(
                    intval($input->accept) == 1
                ){return array();}
            case 'verifyToken': 
                if(
                    $modeler::exists($input->token,'activation_token')
                    && $modeler::model()->activation_token == SQDE_Session::get('registration_token')
                    && $modeler::model()->active == 0
                ){return array();}
        }
        return false;
    }
    public static function reset(){
        SQDE_Session::set('registration_step',0);
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if($modeler::exists(SQDE_Session::get('registration_id'), 'id')){
            $operations = SQDE_PackagesHandler::model(static::$package)->operations;
            forward_static_call_array(array($operations,'reset'),array());
            $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
            $js[] = forward_static_call_array(array($cards_xhr,'signup'),array());
            return implode(' ', $js);
        }
        return;
    }
    public static function signup($json = null){
        
        $dialog = SQDE_PackagesHandler::model(static::$package)->xhr->dialogs[__FUNCTION__];
        if(!SQDE_Session::is($dialog['session_store_key'])){ return; }
        $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
        $operations_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->operations;
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if($json != null){
                $input = json_decode(rawurldecode($json)); 
                if(isset($input->reset)){ 
                    SQDE_Session::set($dialog['session_store_key'], $dialog['session_store_setup']);
                    return forward_static_call_array(array($cards_xhr,__FUNCTION__),array());  
                }
        }
        $dialog_store = SQDE_Session::get($dialog['session_store_key']);
        $dialog_step = $dialog['steps'][$dialog_store->step];
        if(isset($dialog_step->prep) && $dialog_step->prep == true){
            if(isset($dialog_step->required_members)){
                foreach($dialog_step->required_members as $m){
                    if(!isset($input->$m)){ return;}
                }
            }
            switch($dialog_store->step){
                case 0:
                    if(
                        !$modeler::exists(rawurldecode($input->email),'email')
                        && SQDE_UserAuthority::isAnEmailAddress(rawurldecode($input->email))
                    ){
                        $dialog_store->prep->new_email = rawurldecode($input->email);
                        $dialog_store->prep->token = $operations::generateHash();
                        SQDE_Session::set($dialog['session_store_key'], $dialog_store);
                        
                        $hooks = array(
                            "searchStrs" => array('#TOKEN#'),
                            "subjectStrs" => array($dialog_store->prep->token)
                        );
                        SQDE_Mailer::systemSend($dialog_store->prep->new_email,'Verify your email address with sequode.com',SQDE_Mailer::makeTemplate('activation.txt',$hooks));
                    }
                    else
                    {
                        $error = true;
                    }
                    break;
                case 1:
                    if(
                        $dialog_store->prep->token == rawurldecode($input->token)
                    ){  
                        $_a =  array($dialog_store->prep->new_email);
                    }
                    else
                    {
                        $error = true;
                    }
                    break;
            }
        }
        if(isset($dialog_step->operation) && is_array($_a)){
            if(!(forward_static_call_array(array($operations, $dialog_step->operation),$_a))){
                $error = true;
            }
        }
        if(!isset($error)){
            $dialog_store->step++;
            SQDE_Session::set($dialog['session_store_key'], $dialog_store);
            return forward_static_call_array(array($cards_xhr,__FUNCTION__),array()); 
        }
    }
}