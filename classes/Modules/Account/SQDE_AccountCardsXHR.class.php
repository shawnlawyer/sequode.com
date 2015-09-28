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
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function details($dom_id = 'CardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
}