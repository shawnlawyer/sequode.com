<?php
class SQDE_SequodeCardsXHR {
    public static $package = 'Sequode';
    public static function componentSettings($type = false, $member=null, $_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Sequode::exists($_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ return; };
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__,array($type, $member)), $dom_id);
    }
    public static function details($_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Sequode::exists($_model_id,'id')
        && SQDE_UserAuthority::canView()
        )){ return; }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function internalForms($_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Sequode::exists($_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function internalPositionForms($_model_id=0, $position=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Sequode::exists($_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function chart($_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Sequode::exists($_model_id,'id')
        && SQDE_UserAuthority::canEdit()
        )){ return; }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function search($dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function my($dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function favorites($dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_UserAuthority::isAuthenticated()
        )){ return; }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
}