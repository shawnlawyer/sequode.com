<?php
class SQDE_AccountOperationsXHR {
    public static $package = 'Account';
    public static function updatePassword($json){
        $_o = json_decode(rawurldecode($json));
        forward_static_call_array(array(SQDE_PackagesHandler::model(static::$package)->operations,__FUNCTION__),array(rawurldecode($_o->new_password));
        return;
    }
    public static function updateEmail($json){
        $_o = json_decode(rawurldecode($json));
        forward_static_call_array(array(SQDE_PackagesHandler::model(static::$package)->operations,__FUNCTION__),array(rawurldecode($_o->email));
        return;
    }
}