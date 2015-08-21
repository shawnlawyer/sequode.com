<?php
class SQDE_UserFormsXHR {
    public static $package = 'Account';
    public static function updatePassword($dom_id){
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateEmail($dom_id){
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateDomain($dom_id){
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
}