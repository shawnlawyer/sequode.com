<?php

ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . realpath('../resource') . DIRECTORY_SEPARATOR);
ob_start('ob_gzhandler');
define("BASE_PATH", realpath('../'));
define("RESOURCE_PATH", realpath(BASE_PATH . '/resource'));
define("WWW_PATH", realpath(BASE_PATH . '/public'));
require_once('../vendor/autoload.php');

use Sequode\Controller\Application\HTTPRequest;
use Symfony\Component\HttpFoundation\Request as SymfonyHTTPRequest;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = (new Dotenv())->load(BASE_PATH . '/.env');
//(new \Whoops\Run())->pushHandler(new Whoops\Handler\PrettyPageHandler())->register();
$request = SymfonyHTTPRequest::createFromGlobals();

use Sequode\Model\Application\Configuration as ApplicationConfiguration;
use Sequode\Model\Application\Runtime as ApplicationRuntime;
use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\Application\Modules\Session\Operations as SessionOperations;
use Sequode\Application\Modules\Session\Store as SessionStore;
use Sequode\Application\Modules\Auth\Operations as AuthOperations;

use Application\HTTPAPIRequest;

ApplicationConfiguration::model(Application\Application::class);
if ($_SERVER['HTTP_HOST'] != $_ENV['SEQUODE_API_DOMAIN']){
    SessionOperations::start();
    if (SessionStore::is('owner_id'))
    {
        AuthOperations::load();
    }
}
ModuleRegistry::model(Application\Modules::class);
ApplicationRuntime::model(Application\Runtime::class);
if ($_SERVER['HTTP_HOST'] != $_ENV['SEQUODE_API_DOMAIN']){
    HTTPRequest::run();
}else{
    HTTPAPIRequest::rest();
}


