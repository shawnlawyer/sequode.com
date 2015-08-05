<?php
class SQDE_PackageFormsAjax {
    public static $package = 'Package';
    public static function name($machine_model_id, $dom_id){
        if(!(
        SQDE_Package::exists($machine_model_id,'id')
        && (SQDE_UserAuthority::isPackageOwner()
        || SQDE_UserAuthority::isSystemOwner())
        )){ return; }
        $components_array = SQDE_Forms::render(self::$package,__FUNCTION__);
        $html = array();
        foreach($components_array as $key => $object){
            if(isset($object->html)){
                $html[] = $object->html;
            }
        }
        $js[] = SQDE_BrowserRemote::addIntoDom($dom_id,implode('',$html),'replace');
        foreach($components_array as $key => $object){
            if(isset($object->js)){
                $js[] = $object->js;
            }
        }
        $js[] = '$(\'.focus-input\').focus();';
        $js[] = '$(\'.focus-input\').select();';    
        return implode(' ',$js);
    }
}