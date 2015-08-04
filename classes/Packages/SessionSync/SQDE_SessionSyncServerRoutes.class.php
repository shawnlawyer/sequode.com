<?php
class SQDE_SessionSyncServerRoutes {
	public static function setSessionCookie($value = '', $expire = 0){
        if($_COOKIE[SQDE_Application::model()->sessions->cookie] != $value && SQDE_Session::exists($value, 'session_id') && intval(SQDE_Session::model()->session_start) > time()-86400){
            return SQDE_Server::setCookie(SQDE_Application::model()->sessions->cookie, $value, intval(SQDE_Session::model()->session_start)+86400);
        }
        return false;
    }
}