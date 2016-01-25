<?php

use Sequode\View\Module\Card as ModuleCard;
use Sequode\Component\Card\Kit\JS as CardKitJS;


class SQDE_UserCardsXHR {
    public static $package = 'User';
    public static $modeler = 'SQDE_User';
    public static function details($_model_id=0, $dom_id = 'CardsContainer'){
        $modeler = static::$modeler;
        if(!(
            $modeler::exists($_model_id,'id')
        )){ return; }
        return CardKitJS::placeCard(ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function search($dom_id = 'CardsContainer'){
        return CardKitJS::placeCard(ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
}