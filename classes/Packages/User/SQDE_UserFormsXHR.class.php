<?php
class SQDE_UserFormsXHR {
    public static $package = 'User';
    public static $modeler = 'SQDE_User';
    public static function updatePassword($_model_id, $dom_id){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateEmail($_model_id, $dom_id){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateDomain($_model_id, $dom_id){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateRole($_model_id, $dom_id){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateActive($_model_id, $dom_id){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateName($_model_id, $dom_id){
        $modeler = SQDE_PackagesHandler::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
}