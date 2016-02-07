<?php
class SQDE_PackageDownloadsRest{
	public static function source($_model_token){
        if(!(
		SQDE_Package::exists($_model_token,'token')
        && \Sequode\Application\Modules\Sequode\Modeler::exists(SQDE_Package::model()->sequode_id,'id')
        && (\Sequode\Application\Modules\Auth\Authority::isOwner(SQDE_Package::model()) || \Sequode\Application\Modules\Auth\Authority::isSystemOwner())
        && (\Sequode\Application\Modules\Auth\Authority::isOwner(\Sequode\Application\Modules\Sequode\Modeler::model()) || \Sequode\Application\Modules\Auth\Authority::isSystemOwner())
		)){ return; }
        
        header('Content-Type: text/plain',true);
        header('Content-Disposition: attachment; filename="'.SQDE_Package::model()->name.'.class.php"');
        echo SQDE_PackageOperations::download();
    }
}