<?php
class SQDE_AccountOperationsXHR {
    public static $package = 'Account';
	public static $merge = false;
	public static $routes = array(
		'updatePassword',
        'resetUpdatePassword'
	);
	public static $routes_to_methods = array(
		'updatePassword' => 'updatePasswordDialog',
		'resetUpdatePassword' => 'resetUpdatePasswordDialog'
    );
	public static $dialogs = array(
        'update_password' => array(
            'steps' => array(
                array(
                    'prep' => 'verifyNewPassword'
                ),
                array(
                    'prep' => 'verifyPassword',
                    'operation' => 'updatePassword'
                )
            )
        )
    );
    public static function updatePasswordDialog(){
        
        $step = (object) static::$dialogs['update_password']['steps'][SQDE_Session::get('update_password_step')];
        $operations_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->operations;
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        $parameters = forward_static_call_array(array($operations_xhr, 'updatePasswordPrep'), func_get_args());
        if(!(
            is_array($parameters)
            && forward_static_call_array(array($operations, $step->operation),$parameters)
        )){
            return;
        }
        SQDE_Session::set('update_password_step', SQDE_Session::get('update_password_step') + 1);
        $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
        $js[] = forward_static_call_array(array($cards_xhr,'signup'),array());
        return implode(' ', $js);  
    }
    public static function updatePasswordPrep($json = null){
        if(!SQDE_Session::is('update_password_step')){return;}
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $input = json_decode(rawurldecode($json));
        $step = (object) static::$dialogs['update_password']['steps'][SQDE_Session::get('update_password_step')];
        switch($step->prep){
            case 'verifyNewPassword':
                if(
                    rawurldecode($input->password) == rawurldecode($input->confirm_password)
                    && SQDE_UserAuthority::isSecurePassword(rawurldecode($input->password))
                ){
                    SQDE_Session::set('update_password_new_secret',rawurldecode($input->password));
                    return array();
                }
            case 'verifyPassword':
                if(
                    SQDE_UserAuthority::isPassword(rawurldecode($input->secret), $modeler::model())
                ){array(SQDE_Session::get('update_password_new_secret'));}
        }
        return false;
    }
    public static function resetUpdatePasswordDialog(){
        SQDE_Session::set('update_password_step',0);
        SQDE_Session::set('update_password_new_secret','');
        $js = array();
        $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
        return forward_static_call_array(array($cards_xhr,'updatePassword'),array());
    }
}