<?php
class SQDE_TokenFormsXHR {
    public static $package = 'Token';
    public static function name($_model_id, $dom_id){
        $modeler = Sequode\ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeForm(\Sequode\ModuleForm::render(self::$package,__FUNCTION__), $dom_id);
    }
}