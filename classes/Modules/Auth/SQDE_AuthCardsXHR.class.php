<?php
class SQDE_AuthCardsXHR {
    public static $package = 'Auth';
    public static function login($dom_id = 'MagicCardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    
}