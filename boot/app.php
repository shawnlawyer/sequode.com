<?php
use Sequode\Model\Application\Configuration;
use Sequode\Model\Application\Runtime;

date_default_timezone_set('America/Los_Angeles');
ob_start('ob_gzhandler');

Configuration::model('\\SQDE_BuilderApplicationConfiguration');
\Sequode\Application\Modules\Session\Modeler::start();
if(\Sequode\Application\Modules\Session\Modeler::is('user_id')){
    \Sequode\Application\Modules\Auth\Operations::load();
}

Runtime::model('\\SQDE_SequodeBuilderApplicationProfile');
