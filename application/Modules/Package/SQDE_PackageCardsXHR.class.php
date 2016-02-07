<?php

use Sequode\View\Module\Card as ModuleCard;
use Sequode\Component\Card\Kit\JS as CardKitJS;

class SQDE_PackageCardsXHR {
    public static $package = 'Package';
    public static $modeler = 'SQDE_Package';
    public static function details($_model_id=0, $dom_id = 'CardsContainer'){
        $modeler = static::$modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (\Sequode\Application\Modules\Auth\Authority::isOwner( $modeler::model() )
        || \Sequode\Application\Modules\Auth\Authority::isSystemOwner())
        )){return;}
        return CardKitJS::placeCard(ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function search($dom_id = 'CardsContainer'){
        return CardKitJS::placeCard(ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function my($dom_id = 'CardsContainer'){
        return CardKitJS::placeCard(ModuleCard::render(self::$package,__FUNCTION__), $dom_id);
    }
}