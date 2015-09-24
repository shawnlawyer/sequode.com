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
    public static function updatePasswordDialog(){
        
        $dialog = SQDE_PackagesHandler::model(static::$package)->xhr->dialogs['update_password'];
        if(!SQDE_Session::is('update_password')){ return; }
        $store = SQDE_Session::get('update_password');
        $step = $dialog['steps'][$store->step];
        $operations_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->operations;
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        $parameters = forward_static_call_array(array($operations_xhr, 'updatePasswordPrep'), func_get_args());
        if(!(
            is_array($parameters)
        )){
            return;
        }
        if(isset($step->operation)){
            if(!(forward_static_call_array(array($operations, $step->operation),$parameters))){
                return;
            }
        }
        $store->step++;
        SQDE_Session::set('update_password', $store);
        $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
        return forward_static_call_array(array($cards_xhr,'updatePassword'),array());  
    }
    public static function updatePasswordPrep($json = null){
        $dialog = SQDE_PackagesHandler::model(static::$package)->xhr->dialogs['update_password'];
        if(!SQDE_Session::is('update_password')){ return; }
        $store = SQDE_Session::get('update_password');
        $step = $dialog['steps'][$store->step];
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $input = json_decode(rawurldecode($json));
        switch($step->prep){
            case 'verifyNewPassword':
                if(
                    rawurldecode($input->password) == rawurldecode($input->confirm_password)
                    && SQDE_UserAuthority::isSecurePassword(rawurldecode($input->password))
                ){
                    
                    $store->prep->new_secret = rawurldecode($input->password);
                    SQDE_Session::set('update_password',$store);
                    return array();
                }
            case 'verifyPassword':
                if(
                    SQDE_UserAuthority::isPassword(rawurldecode($input->password), $modeler::model())
                ){
                    return array(SQDE_Session::get('update_password')->prep->new_secret);
                }
        }
        return false;
    }
    public static function resetUpdatePasswordDialog(){
        SQDE_Session::set('update_password',(object) array('step'=>0, 'prep'=> (object) null));
        $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
        return forward_static_call_array(array($cards_xhr,'updatePassword'),array());
    }
}