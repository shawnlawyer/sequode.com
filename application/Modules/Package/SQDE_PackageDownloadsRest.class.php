<?php
class SQDE_PackageDownloadsRest{
	public static function source($_model_token){
        if(!(
		SQDE_Package::exists($_model_token,'token')
        && \Sequode\Application\Modules\Sequode\Modeler::exists(SQDE_Package::model()->sequode_id,'id')
        && (\Sequode\Application\Module\Auth\Authority::isOwner(SQDE_Package::model()) || \Sequode\Application\Module\Auth\Authority::isSystemOwner())
        && (\Sequode\Application\Module\Auth\Authority::isOwner(\Sequode\Application\Modules\Sequode\Modeler::model()) || \Sequode\Application\Module\Auth\Authority::isSystemOwner())
		)){ return; }
        
        header('Content-Type: text/plain',true);
        header('Content-Disposition: attachment; filename="'.SQDE_Package::model()->name.'.class.php"');
        echo SQDE_PackageOperations::download();
    }
}