<?php
class SQDE_UserFormsXHR {
    public static $package = 'User';
    public static $modeler = 'SQDE_User';
    public static function selectPalette($dom_id){
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
}