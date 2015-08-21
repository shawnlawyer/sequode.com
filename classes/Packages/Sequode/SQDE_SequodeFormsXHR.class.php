<?php
class SQDE_SequodeFormsXHR {
    public static $package = 'Sequode';
    public static function name($_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id,'id')
            && SQDE_UserAuthority::canEdit()
        )){ return; }
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function description($_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id,'id')
            && SQDE_UserAuthority::canEdit()
        )){ return; }
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function component($type, $_model_id, $map_key, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id,'id')
            && SQDE_UserAuthority::canEdit()
            && in_array($type, array('input','property'))
        )){ return; }
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package, __FUNCTION__, array($type, $map_key)), $dom_id);
    }
    public static function componentSettings($type, $member, $_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id,'id')
            && SQDE_UserAuthority::canEdit()
            && in_array($type, array('input','property'))
        )){ return; }
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package, __FUNCTION__, array($type, $member, $dom_id)), $dom_id);
    }
    public static function sequode($_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id, 'id')
            && SQDE_UserAuthority::canEdit()
        )){ return; }
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package, __FUNCTION__), $dom_id);
    }
    public static function updateIsPalette($_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id, 'id')
            && SQDE_UserAuthority::canEdit()
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package, __FUNCTION__), $dom_id);
    }
    public static function updateIsPackage($_model_id, $dom_id){
        if(!(
            SQDE_Sequode::exists($_model_id, 'id')
            && SQDE_UserAuthority::canEdit()
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package, __FUNCTION__), $dom_id);
    }
    public static function sharing($_model_id, $dom_id){
        if(!(
            SQDE_UserAuthority::isSystemOwner()
            && SQDE_Sequode::exists($_model_id, 'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package, __FUNCTION__), $dom_id);
    }
    public static function tenancy($_model_id, $dom_id){
        if(!(
            SQDE_UserAuthority::isSystemOwner()
            && SQDE_Sequode::exists($_model_id, 'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package, __FUNCTION__), $dom_id);
    }
}