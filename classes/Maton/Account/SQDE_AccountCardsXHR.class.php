<?php
class SQDE_AccountCardsXHR {
    public static $package = 'Account';
    public static function details($dom_id = 'MagicCardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__,array()), $dom_id);
    }
}