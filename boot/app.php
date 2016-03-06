<?php

use Sequode\Model\Application\Configuration;
use Sequode\Model\Application\Runtime;
use Sequode\Model\Module\Registry as ModuleRegistry;

use Sequode\Application\Modules\Session\Operations as SessionOperations;
use Sequode\Application\Modules\Session\Store as SessionStore;

date_default_timezone_set('America/New_York');
ob_start('ob_gzhandler');

,

set_include_path(get_include_path() . PATH_SEPARATOR . '../resources/');

Configuration::model(\Application::class);

$modules = Modules::model();

foreach($modules as $module){
    ModuleRegistry::add($module);
}
        
SessionOperations::start();
if(SessionStore::is('user_id')){
    \Sequode\Application\Modules\Auth\Operations::load();
}

Runtime::model(\Runtime::class);
