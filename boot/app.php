<?php

date_default_timezone_set('America/Los_Angeles');
ob_start('ob_gzhandler');

Sequode\ApplicationConfiguration::model('\\SQDE_BuilderApplicationConfiguration');
SQDE_Session::start();
echo 'here';
exit;
if(SQDE_Session::is('user_id')){
    SQDE_AuthOperations::load();
}

Sequode\ApplicationProfile::model('\\SQDE_SequodeBuilderApplicationProfile');
//Sequode\ApplicationProfile::model($_SERVER['APPLICATION_PROFILE']);
