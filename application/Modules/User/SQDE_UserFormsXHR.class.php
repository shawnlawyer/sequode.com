<?php

use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\View\Module\Form as ModuleForm;

class SQDE_UserFormsXHR {
    public static $package = 'User';
    public static function updatePassword($_model_id, $dom_id){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeForm(ModuleForm::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateEmail($_model_id, $dom_id){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeForm(ModuleForm::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateDomain($_model_id, $dom_id){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeForm(ModuleForm::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateRole($_model_id, $dom_id){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeForm(ModuleForm::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateActive($_model_id, $dom_id){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeForm(ModuleForm::render(self::$package,__FUNCTION__), $dom_id);
    }
    public static function updateName($_model_id, $dom_id){
        $modeler = ModuleRegistry::model(static::$package)->modeler;
        if(!(
        $modeler::exists($_model_id,'id')
        )){return;}
        return \Sequode\Component\DOMElement\Kit\JS::placeForm(ModuleForm::render(self::$package,__FUNCTION__), $dom_id);
    }
}