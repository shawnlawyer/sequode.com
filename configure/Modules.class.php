<?php

use Sequode\Model\Module\Registry as ModuleRegistry;

class Modules {
	
    public static function model(){
        
        $modules = array();
        
        if(!\Sequode\Application\Modules\Account\Authority::isAuthenticated()){
            
            $modules[] = Sequode\Application\Modules\AuthConsole\Module::class;
            $modules[] = Sequode\Application\Modules\Auth\Module::class;
            $modules[] = Sequode\Application\Modules\Register\Module::class;
        
        }else{
        
            $modules[] = Sequode\Application\Modules\ApplicationConsole\Module::class;
            $modules[] = Sequode\Application\Modules\Authed\Module::class;
            $modules[] = Sequode\Application\Modules\Sequode\Module::class;
            $modules[] = Sequode\Application\Modules\Account\Module::class;
            $modules[] = Sequode\Application\Modules\Package\Module::class;
            $modules[] = Sequode\Application\Modules\Token\Module::class;
            
            if(\Sequode\Application\Modules\Account\Authority::isSystemOwner()){
                
                $modules[] = Sequode\Application\Modules\Session\Module::class;
                $modules[] = Sequode\Application\Modules\User\Module::class;
                $modules[] = Sequode\Application\Modules\BlockedIP\Module::class;
                
            }
        
        }
        
        return $modules;
	
    }
    
}