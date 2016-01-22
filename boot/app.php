<?php

date_default_timezone_set('America/Los_Angeles');
ob_start('ob_gzhandler');

Sequode\ApplicationConfiguration::model('\\SQDE_BuilderApplicationConfiguration');
SQDE_Session::start();
if(SQDE_Session::is('user_id')){
    SQDE_AuthOperations::load();
}

Sequode\Model\Application\Runtime::model('\\SQDE_SequodeBuilderApplicationProfile');
