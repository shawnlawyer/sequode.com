<?php
class SQDE_TokenCardsXHR {
    public static $package = 'Token';
    public static function details($_model_id=0, $dom_id = 'CardsContainer'){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){return;}
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function search($dom_id = 'CardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function my($dom_id = 'CardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
}