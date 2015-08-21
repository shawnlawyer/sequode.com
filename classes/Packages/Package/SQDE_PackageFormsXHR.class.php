<?php
class SQDE_PackageFormsXHR {
    public static $package = 'Package';
    public static function name($_model_id, $dom_id){
        if(!(
        SQDE_Package::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( SQDE_Package::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function packageSequode($_model_id, $dom_id){
        if(!(
        SQDE_Package::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( SQDE_Package::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
}