<?php
class SQDE_TokenFormsXHR {
    public static $package = 'Token';
    public static $modeler = 'SQDE_Token';
    public static function name($_model_id, $dom_id){
        $modeler = static::$modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){return;}
        return SQDE_ComponentJS::placeForm(SQDE_Forms::render(self::$package,__FUNCTION__), $dom_id);
    }
}