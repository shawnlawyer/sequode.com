<?php

use Symfony\Component\Dotenv\Dotenv;
use Sequode\Controller\Application\Request\Site\HTTP as SiteHTTPRequest;
use Sequode\Controller\Application\Request\API\REST as APIRestRequest;
use Sequode\Sequode;
use Sequode\Model\Application\Configuration as ApplicationConfiguration;
use Sequode\Model\Module\Registry as ModuleRegistry;
use Sequode\Application\Modules\Session\Operations as SessionOperations;
use Sequode\Application\Modules\Session\Store as SessionStore;
use Sequode\Application\Modules\Auth\Operations as AuthOperations;

ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . realpath('../resource') . DIRECTORY_SEPARATOR);
ob_start('ob_gzhandler');
define("BASE_PATH", realpath('../'));
define("RESOURCE_PATH", realpath(BASE_PATH . '/resource'));
define("WWW_PATH", realpath(BASE_PATH . '/public'));

require_once('../vendor/autoload.php');

(new Dotenv())->load(BASE_PATH . '/.env');
if($_ENV['WHOOPS_ENABLED']){
    (new \Whoops\Run())->pushHandler(new Whoops\Handler\PrettyPageHandler())->register();
}
switch($_SERVER['HTTP_HOST']){
    case $_ENV['SEQUODE_CONSOLE_DOMAIN']:
        ApplicationConfiguration::model(Application\Configuration::class);
        SessionOperations::start();
        if (SessionStore::is('owner_id')){
            AuthOperations::load();
        }
        ModuleRegistry::model(Application\Modules::class);
        SiteHTTPRequest::handle();
        break;
    case $_ENV['SEQUODE_API_DOMAIN']:
        ApplicationConfiguration::model(Application\Configuration::class);
        APIRestRequest::handle();
        break;
    case $_ENV['SEQUODE_RUN_DOMAIN']:
        $server = new Sequode('SQDEa0b14c475d6a6ffad52060091f9a973f');
        $server->http();
        break;

}


