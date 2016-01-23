<?php

use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\View\Module\Card as ModuleCard;

class SQDE_SessionCardsXHR {
    public static $package = 'Session';
    public static function details($_model_id=0, $dom_id = 'CardsContainer'){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        if(!(
            $modeler::exists($_model_id,'id')
        )){ return; }
        return \Sequode\Component\Card\Kit\JS::placeCard(ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function search($dom_id = 'CardsContainer'){
        return \Sequode\Component\Card\Kit\JS::placeCard(ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
}