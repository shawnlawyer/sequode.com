<?php
class SQDE_SequodeCardsXHR {
    public static $package = 'Sequode';
    public static function componentSettings($type = false, $member=null, $_model_id=0, $dom_id = 'CardsContainer'){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__,array($type, $member)), $dom_id);
    }
    public static function details($_model_id=0, $dom_id = 'CardsContainer'){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && SQDE_UserAuthority::canView()
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function internalForms($_model_id=0, $dom_id = 'CardsContainer'){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function internalPositionForms($_model_id=0, $position=0, $dom_id = 'CardsContainer'){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function chart($_model_id=0, $dom_id = 'CardsContainer'){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function sequencer($_model_id=0, $dom_id = 'CardsContainer'){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
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
    public static function favorites($dom_id = 'CardsContainer'){
        return \Sequode\Component\DOMElement\Kit\JS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
}