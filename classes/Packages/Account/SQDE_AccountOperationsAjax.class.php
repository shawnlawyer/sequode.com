<?php
class SQDE_AccountOperationsAjax {
    public static $package = 'Account';
    public static function updateDomain($json){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        $input = json_decode(rawurldecode($json));
        SQDE_UserOperations::updateDomain(rawurldecode($input->domain));
        return;
    }
    public static function updatePassword($json){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        $input = json_decode(rawurldecode($json));
        SQDE_UserOperations::updatePassword(rawurldecode($input->new_password));
        return;
    }
    public static function updateEmail($json){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        $input = json_decode(rawurldecode($json));
        SQDE_UserOperations::updateEmail(rawurldecode($input->email));
        return;
    }
}