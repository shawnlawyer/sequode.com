<?php
class SQDE_AuthedOperations {
    public static $package = 'Authed';
	public static function logout(){
		SQDE_Session::end();
		SQDE_Session::start();
		SQDE_Session::set('console','Auth');
        return;
	}
}