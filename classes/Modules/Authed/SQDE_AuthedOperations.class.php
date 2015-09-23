<?php
class SQDE_AuthedOperations {
    public static $package = 'Authed';
	public static function logout(){
		SQDE_Session::end();
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        $modeler::model((object) null);
		SQDE_Session::start();
		SQDE_Session::set('console','Auth');
        return;
	}
}