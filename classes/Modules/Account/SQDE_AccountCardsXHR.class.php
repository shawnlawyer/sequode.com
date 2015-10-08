<?php
class SQDE_AccountCardsXHR {
    public static $package = 'Account';
	public static $merge = false;
	public static $routes = array(
		'details',
		'updatePassword'
	);
	public static $routes_to_methods = array(
		'details' => 'details',
		'updatePassword' => 'updatePassword'
    );
    public static function updatePassword($dom_id = 'CardsContainer'){
        $dialog = SQDE_PackagesHandler::model(static::$package)->xhr->dialogs[__FUNCTION__];
        if(!SQDE_Session::is($dialog['session_store_key'])){
            SQDE_Session::set($dialog['session_store_key'], $dialog['session_store_setup']);
        }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateEmail($dom_id = 'CardsContainer'){
        $dialog = SQDE_PackagesHandler::model(static::$package)->xhr->dialogs[__FUNCTION__];
        if(!SQDE_Session::is($dialog['session_store_key'])){
            SQDE_Session::set($dialog['session_store_key'], $dialog['session_store_setup']);
        }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function details($dom_id = 'CardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
}