<?php

ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . realpath('../resource') . DIRECTORY_SEPARATOR);
ob_start('ob_gzhandler');
define("BASE_PATH", realpath('../'));
define("RESOURCE_PATH", realpath(BASE_PATH . '/resource'));
define("WWW_PATH", realpath(BASE_PATH . '/public'));
require_once('../vendor/autoload.php');
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpFoundation\Request as SymfonyHTTPRequest;
use Whoops\Handler\PrettyPageHandler;
use Sequode\Controller\Application\Request\Site\HTTP as SiteHTTPRequest;
use Sequode\Controller\Application\Request\API\REST as APIRestRequest;
use Sequode\Sequode;
use Sequode\Model\Application\Configuration as ApplicationConfiguration;
use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\Application\Modules\Session\Operations as SessionOperations;
use Sequode\Application\Modules\Session\Store as SessionStore;
use Sequode\Application\Modules\Auth\Operations as AuthOperations;



$dotenv = (new Dotenv())->load(BASE_PATH . '/.env');
//(new \Whoops\Run())->pushHandler(new Whoops\Handler\PrettyPageHandler())->register();
$request = SymfonyHTTPRequest::createFromGlobals();
if ($_SERVER['HTTP_HOST'] == $_ENV['SEQUODE_RUN_DOMAIN']) {
    //(new \Whoops\Run())->pushHandler(new Whoops\Handler\PrettyPageHandler())->register();
    $sequode = new Sequode('SQDEa0b14c475d6a6ffad52060091f9a973f');
    $sequode->http();
    exit();
}
ApplicationConfiguration::model(Application\Configuration::class);
if ($_SERVER['HTTP_HOST'] != $_ENV['SEQUODE_API_DOMAIN']){
    SessionOperations::start();
    if (SessionStore::is('owner_id'))
    {
        AuthOperations::load();
    }
}
ModuleRegistry::model(Application\Modules::class);
if ($_SERVER['HTTP_HOST'] == $_ENV['SEQUODE_API_DOMAIN']) {
    APIRestRequest::rest();
} else {
    SiteHTTPRequest::handle();
}


