<?php
class SQDE_PackageFormsXHR {
    public static $package = 'Package';
    public static $modeler = 'SQDE_Package';
    public static function name($_model_id, $dom_id){
        $modeler = static::$modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeForm(\Sequode\ModuleForm::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function packageSequode($_model_id, $dom_id){
        $modeler = static::$modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        && (SQDE_UserAuthority::isOwner( $modeler::model() )
        || SQDE_UserAuthority::isSystemOwner())
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeForm(\Sequode\ModuleForm::render(self::$package,__FUNCTION__), $dom_id);
    }
}