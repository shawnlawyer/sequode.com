<?php
class SQDE_ConsoleCardsXHR {
    public static $package = 'Console';
    public static function index($dom_id = 'MagicCardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__,array(SQDE_AuthenticatedUser::model())), $dom_id);
    }
}