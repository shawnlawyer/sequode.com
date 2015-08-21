<?php
class SQDE_UsersFormsXHR {
    public static $package = 'Users';
    public static $modeler = 'SQDE_User';
    public static function updatePassword($_model_id, $dom_id){
        if(!(
        {static::$modeler}::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateEmail($_model_id, $dom_id){
        if(!(
            SQDE_User::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateDomain($_model_id, $dom_id){
        if(!(
            SQDE_User::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateRole($_model_id, $dom_id){
        if(!(
            SQDE_User::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateActive($_model_id, $dom_id){
        if(!(
            SQDE_User::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateName($_model_id, $dom_id){
        if(!(
            SQDE_User::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
}