<?php
class SQDE_AccountOperationsXHR {
    public static $package = 'Account';
	public static $merge = false;
	public static $routes = array(
		'updatePassword',
        'resetUpdatePassword'
	);
	public static $routes_to_methods = array(
		'updatePassword' => 'updatePassword'
    );
    public static function updatePassword($json = null){
        
        $dialog = SQDE_PackagesHandler::model(static::$package)->xhr->dialogs[__FUNCTION__];
        if(!SQDE_Session::is($dialog['session_store_key'])){ return; }
        $dialog_store = SQDE_Session::get($dialog['session_store_key']);
        $dialog_step = $dialog['steps'][$dialog_store->step];
        $operations_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->operations;
        $operations = SQDE_PackagesHandler::model(static::$package)->operations;
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if($json != null){
                $input = json_decode(rawurldecode($json)); 
                echo "moo";
                
                exit;
                if(isset($input->reset)){ 
                    SQDE_Session::set($dialog['session_store_key'], $dialog['session_store_setup']);
                }
        }
        $step_qa = array('prep'=>true,'operation'=>true);
        if(isset($dialog_step->prep) && $dialog_step->prep == true){
            $step_qa['prep'] = false;
        }
        if(isset($dialog_step->operation)){
            $step_qa['operation'] = true;
        }
        if(isset($dialog_step->prep) && $dialog_step->prep == true){
            if(isset($dialog_step->required_members)){
                foreach($dialog_step->required_members as $m){
                    if(!isset($input->$m)){ return;}
                }
            }
            switch($dialog_store->step){
                case 0:
                    if(
                        rawurldecode($input->password) == rawurldecode($input->confirm_password)
                        && SQDE_UserAuthority::isSecurePassword(rawurldecode($input->password))
                    ){
                        $dialog_store->prep->new_secret = rawurldecode($input->password);
                        SQDE_Session::set($dialog['session_store_key'], $dialog_store);
                        $step_qa['prep'] = true;
                    }
                    break;
                case 1:
                    if(
                        SQDE_UserAuthority::isPassword(rawurldecode($input->password), $modeler::model())
                    ){
                        $_a =  array($dialog_store->prep->new_secret);
                        $step_qa['prep'] = true;
                    }
                    break;
            }
        }
        if(isset($dialog_step->operation) && is_array($_a)){
            if(!(forward_static_call_array(array($operations, $dialog_step->operation),$_a))){
                $step_qa['operation'] = false;
            }
        }
        
        
        if($step_qa['prep'] == true && $step_qa['operation'] == true){
            $dialog_store->step++;
        }
        SQDE_Session::set($dialog['session_store_key'], $dialog_store);
        $cards_xhr = SQDE_PackagesHandler::model(static::$package)->xhr->cards;
        return forward_static_call_array(array($cards_xhr,__FUNCTION__),array());  
    }
}