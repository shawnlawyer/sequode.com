<?php
class SQDE_MachineFormsXHR {
    public static $package = 'Machine';
    public static function name($_model_id, $dom_id){
        if(!(
        SQDE_Machine::exists($_model_id,'id')
        && (SQDE_UserAuthority::isMachineOwner()
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
}