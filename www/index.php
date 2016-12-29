<?php

require_once('../vendor/autoload.php');

use Symfony\Component\HttpFoundation\Request as SymfonyHTTPRequest;
use Whoops;

(new Whoops\Run())->pushHandler(new Whoops\Handler\PrettyPageHandler())->register();
define("RESOURCE_PATH", realpath('../resource'));
define("WWW_PATH", realpath('../www'));
$request = SymfonyHTTPRequest::createFromGlobals();
ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . realpath('../resource') . DIRECTORY_SEPARATOR);
date_default_timezone_set('America/New_York');
ob_start('ob_gzhandler');

use Sequode\Model\Application\Configuration as ApplicationConfiguration;
use Sequode\Model\Application\Runtime as ApplicationRuntime;
use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\Application\Modules\Session\Operations as SessionOperations;
use Sequode\Application\Modules\Session\Store as SessionStore;
use Sequode\Application\Modules\Auth\Operations as AuthOperations;

ApplicationConfiguration::model(Application\Application::class);
SessionOperations::start();
if (SessionStore::is('user_id'))
{
    AuthOperations::load();
}
ModuleRegistry::model(Application\Modules::class); 
ApplicationRuntime::model(Application\Runtime::class);

use Sequode\Controller\Application\HTTPRequest;
HTTPRequest::run();
