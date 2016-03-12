<?php

use Sequode\Model\Module\Registry as ModuleRegistry;

class Modules {
	
    public static function model(){
        
        $raw_modules = array();
        
        if(!\Sequode\Application\Modules\Account\Authority::isAuthenticated()){
            
            $raw_modules[] = Application\Modules\AuthConsole\Module::class;
            $raw_modules[] = Sequode\Application\Modules\Auth\Module::class;
            $raw_modules[] = Sequode\Application\Modules\Register\Module::class;
        
        }else{
        
            $raw_modules[] = Application\Modules\ApplicationConsole\Module::class;
            $raw_modules[] = Sequode\Application\Modules\Authed\Module::class;
            $raw_modules[] = Sequode\Application\Modules\Sequode\Module::class;
            $raw_modules[] = Sequode\Application\Modules\Account\Module::class;
            $raw_modules[] = Sequode\Application\Modules\Package\Module::class;
            $raw_modules[] = Sequode\Application\Modules\Token\Module::class;
            
            if(\Sequode\Application\Modules\Account\Authority::isSystemOwner()){
                
                $raw_modules[] = Sequode\Application\Modules\Session\Module::class;
                $raw_modules[] = Sequode\Application\Modules\User\Module::class;
                $raw_modules[] = Sequode\Application\Modules\BlockedIP\Module::class;
                
            }
        
        }
        
        $modules = array();
        
        foreach($raw_modules as $module){
            
            $modules[$module::$registry_key] = $module;
            
        }
        
        return $modules;
	
    }
    
}