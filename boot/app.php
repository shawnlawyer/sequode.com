<?php

use Sequode\Model\Application\Configuration;
use Sequode\Model\Application\Runtime;

date_default_timezone_set('America/Los_Angeles');
ob_start('ob_gzhandler');

Configuration::model(\ApplicationConfiguration::class);
\Sequode\Application\Modules\Session\Operations::start();
if(\Sequode\Application\Modules\Session\Operations::is('user_id')){
    \Sequode\Application\Modules\Auth\Operations::load();
}
Runtime::model(\RuntimeModules::class);
