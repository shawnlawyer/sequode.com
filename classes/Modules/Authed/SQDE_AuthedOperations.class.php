<?php
class SQDE_AuthOperations {
    public static $package = 'Authed';
	public static function logout(){
		SQDE_Session::destroy();
	}
}