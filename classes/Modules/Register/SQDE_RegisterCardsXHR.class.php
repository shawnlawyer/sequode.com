<?php
class SQDE_RegisterCardsXHR {
    public static $package = 'Register';
	public static $merge = false;
	public static $routes = array(
		'signup'
	);
	public static $routes_to_methods = array(
		'signup' => 'signup'
    );
    public static function signup($dom_id = 'CardsContainer'){
        $dialog = SQDE_PackagesHandler::model(static::$package)->xhr->dialogs[__FUNCTION__];
        if(!SQDE_Session::is($dialog['session_store_key'])){
            SQDE_Session::set($dialog['session_store_key'], $dialog['session_store_setup']);
        }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
}