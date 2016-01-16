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
        return \Sequode\Component\Card\Kit\JS::placeCard(\Sequode\ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
}