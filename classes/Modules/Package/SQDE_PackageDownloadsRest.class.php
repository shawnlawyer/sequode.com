<?php
class SQDE_PackageDownloadsRest{
	public static function source($_model_token){
        if(!(
		SQDE_Package::exists($_model_token,'token')
        && SQDE_Sequode::exists(SQDE_Package::model()->sequode_id,'id')
        && (SQDE_UserAuthority::isOwner(SQDE_Package::model()) || SQDE_UserAuthority::isSystemOwner())
        && (SQDE_UserAuthority::isOwner(SQDE_Sequode::model()) || SQDE_UserAuthority::isSystemOwner())
		)){ return; }
        
        header('Content-Type: text/plain',true);
        header('Content-Disposition: attachment; filename="'.SQDE_Package::model()->name.'.class.php"');
        echo SQDE_PackageOperations::download();
    }
}