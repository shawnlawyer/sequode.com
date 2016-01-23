<?php

use Sequode\View\Module\Card as ModuleCard;

class SQDE_AuthCardsXHR {
    public static $package = 'Auth';
    public static function login($dom_id = 'CardsContainer'){
        return \Sequode\Component\Card\Kit\JS::placeCard(ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
}