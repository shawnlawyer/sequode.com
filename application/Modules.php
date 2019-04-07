<?php

namespace Application;

use Sequode\Application\Modules\Account\Authority as AccountAuthority;

class Modules {
	
    public static function model(){
        
        $raw_modules = [];
        
        if(!AccountAuthority::isAuthenticated()){
            
            $raw_modules[] = \Application\Modules\AuthConsole\Module::class;
            $raw_modules[] = \Sequode\Application\Modules\Auth\Module::class;
            $raw_modules[] = \Sequode\Application\Modules\Register\Module::class;
        
        }else{
        
            $raw_modules[] = \Application\Modules\ApplicationConsole\Module::class;
            $raw_modules[] = \Sequode\Application\Modules\Authed\Module::class;
            $raw_modules[] = \Sequode\Application\Modules\Sequode\Module::class;
            $raw_modules[] = \Sequode\Application\Modules\Account\Module::class;
            $raw_modules[] = \Sequode\Application\Modules\Package\Module::class;
            $raw_modules[] = \Sequode\Application\Modules\Token\Module::class;
            
            if(AccountAuthority::isSystemOwner()){
                
                $raw_modules[] = \Sequode\Application\Modules\Session\Module::class;
                $raw_modules[] = \Sequode\Application\Modules\User\Module::class;
                $raw_modules[] = \Sequode\Application\Modules\BlockedIP\Module::class;
                
            }
        
        }
        
        $modules = [];
        
        foreach($raw_modules as $module){
            
            $modules[$module::Registry_Key] = $module;
            
        }
        
        return $modules;
	
    }

    public static function alias($modules){

        $alias = [];

        foreach($modules as $alias => $class){

            $alias[] = ["class" => $class, "alias" => $alias];

        }

        return $alias;

    }

    public static function setAlias($alias){

        return class_alias($alias['original'], $alias['alias']);

    }
}