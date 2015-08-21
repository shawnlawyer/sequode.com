<?php
class SQDE_MachineCardsXHR {
    public static $package = 'Machine';
    public static function details($_model_id=0, $dom_id = 'MagicCardsContainer'){
        if(!(
        SQDE_Machine::exists($_model_id,'id')
        && (SQDE_UserAuthority::isMachineOwner()
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function search($dom_id = 'MagicCardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function my($dom_id = 'MagicCardsContainer'){
        return SQDE_ComponentJS::placeCard(SQDE_Cards::render(self::$package,__FUNCTION__), $dom_id);
    }
}