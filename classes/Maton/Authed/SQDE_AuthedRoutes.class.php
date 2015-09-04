<?php
class SQDE_AuthedRoutes {
	public static function logout(){
		SQDE_Session::destroy();
		header('Location: /');
		exit();		
	}
}