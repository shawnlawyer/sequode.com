<?php
class SQDE_AuthedOperations {
    public static $package = 'Authed';
	public static function logout(){
		SQDE_Session::end();
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        $modeler::model(null);
		SQDE_Session::start();
		SQDE_Session::set('console','Auth');
        return;
	}
}