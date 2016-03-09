<?php

ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . realpath('../resources') . DIRECTORY_SEPARATOR);

use Sequode\Model\Application\Configuration;
use Sequode\Model\Application\Runtime;
use Sequode\Model\Module\Registry as ModuleRegistry;

use Sequode\Application\Modules\Session\Operations as SessionOperations;
use Sequode\Application\Modules\Session\Store as SessionStore;

date_default_timezone_set('America/New_York');
ob_start('ob_gzhandler');

Configuration::model(\Application::class);

  
     
SessionOperations::start();
if(SessionStore::is('user_id')){
    \Sequode\Application\Modules\Auth\Operations::load();
}

ModuleRegistry::model(\Modules::class); 
Runtime::model(\Runtime::class);
