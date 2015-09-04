<?php
class SQDE_AuthRoutes {
	public static function logout(){
		SQDE_Session::destroy();
		header('Location: /');
		exit();		
	}
}