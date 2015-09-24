<?php
class SQDE_AccountCardsXHR {
    public static $package = 'Account';
	public static $merge = false;
	public static $routes = array(
		'details',
		'password'
	);
	public static $routes_to_methods = array(
		'details' => 'details',
		'password' => 'password'
    );
    public static function password($dom_id = 'MagicCardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function details($dom_id = 'MagicCardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
}