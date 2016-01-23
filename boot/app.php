<?php
use Sequode\Model\Application\Configuration;
use Sequode\Model\Application\Runtime;

date_default_timezone_set('America/Los_Angeles');
ob_start('ob_gzhandler');

Configuration::model('\\SQDE_BuilderApplicationConfiguration');
SQDE_Session::start();
if(SQDE_Session::is('user_id')){
    SQDE_AuthOperations::load();
}

Runtime::model('\\SQDE_SequodeBuilderApplicationProfile');
