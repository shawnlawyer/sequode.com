<?php
class SQDE_AuthedRoutes {
    public static $package = 'Authed';
	public static function logout(){
        SQDE_AuthOperations
		SQDE_Session::destroy();
		header('Location: /');
		exit();		
	}
}