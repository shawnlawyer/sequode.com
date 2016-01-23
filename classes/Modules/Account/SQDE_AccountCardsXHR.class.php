<?php

use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\View\Module\Card as ModuleCard;

class SQDE_AccountCardsXHR {
    public static $package = 'Account';
	public static $merge = false;
	public static $routes = array(
		'details',
		'updatePassword',
		'updateEmail'
	);
	public static $routes_to_methods = array(
		'details' => 'details',
		'updatePassword' => 'updatePassword',
		'updateEmail' => 'updateEmail'
    );
    public static function updatePassword($dom_id = 'CardsContainer'){
        $dialog = ModuleRegistry::model(static::$package)->xhr->dialogs[__FUNCTION__];
        if(!SQDE_Session::is($dialog['session_store_key'])){
            SQDE_Session::set($dialog['session_store_key'], $dialog['session_store_setup']);
        }
        return \Sequode\Component\Card\Kit\JS::placeCard(ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateEmail($dom_id = 'CardsContainer'){
        $dialog = ModuleRegistry::model(static::$package)->xhr->dialogs[__FUNCTION__];
        if(!SQDE_Session::is($dialog['session_store_key'])){
            SQDE_Session::set($dialog['session_store_key'], $dialog['session_store_setup']);
        }
        return \Sequode\Component\Card\Kit\JS::placeCard(ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function details($dom_id = 'CardsContainer'){
        return \Sequode\Component\Card\Kit\JS::placeCard(ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
}