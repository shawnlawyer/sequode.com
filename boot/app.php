<?php

use Sequode\Model\Application\Configuration;
use Sequode\Model\Application\Runtime;

use Sequode\Application\Modules\Session\Operations as SessionOperations;
use Sequode\Application\Modules\Session\Store as SessionStore;

date_default_timezone_set('America/Los_Angeles');
ob_start('ob_gzhandler');

Configuration::model(\ApplicationConfiguration::class);

SessionOperations::start();
if(SessionOperations::is('user_id')){
    \Sequode\Application\Modules\Auth\Operations::load();
}

Runtime::model(\RuntimeModules::class);
