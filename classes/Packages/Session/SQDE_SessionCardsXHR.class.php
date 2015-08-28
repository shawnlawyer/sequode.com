<?php
class SQDE_SessionCardsXHR {
    public static $package = 'Session';
    public static function details($_model_id=0, $dom_id = 'MagicCardsContainer'){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if(!(
            $modeler::exists($_model_id,'id')
        )){ return; }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function search($dom_id = 'MagicCardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
}