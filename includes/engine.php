<?php

date_default_timezone_set('America/Los_Angeles');
ob_start('ob_gzhandler');
SQDE_Session::start();
if(SQDE_Session::is('user_id')){
    SQDE_AuthOperations::load();
}
//SQDE_ApplicationProfile::model('SQDE_SequodeBuilderApplicationProfile');
SQDE_ApplicationProfile::model($_SERVER['APPLICATION_PROFILE']);
