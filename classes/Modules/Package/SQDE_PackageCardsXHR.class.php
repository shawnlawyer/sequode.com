<?php
class SQDE_PackageCardsXHR {
    public static $package = 'Package';
    public static $modeler = 'SQDE_Package';
    public static function details($_model_id=0, $dom_id = 'CardsContainer'){
        $modeler = static::$modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function search($dom_id = 'CardsContainer'){
        return \Sequode\Component\DOMElement\Kit\JS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function my($dom_id = 'CardsContainer'){
        return \Sequode\Component\DOMElement\Kit\JS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
}