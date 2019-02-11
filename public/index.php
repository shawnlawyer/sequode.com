<?php

ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . realpath('../resource') . DIRECTORY_SEPARATOR);
ob_start('ob_gzhandler');

require_once('../vendor/autoload.php');
use Symfony\Component\HttpFoundation\Request as SymfonyHTTPRequest;
use Symfony\Component\Dotenv\Dotenv;

define("BASE_PATH", realpath('../'));
define("RESOURCE_PATH", realpath(BASE_PATH . '/resource'));
define("WWW_PATH", realpath(BASE_PATH . '/public'));
$dotenv = (new Dotenv())->load(BASE_PATH . '/.env');
//(new \Whoops\Run())->pushHandler(new Whoops\Handler\PrettyPageHandler())->register();
$request = SymfonyHTTPRequest::createFromGlobals();
/*
 * class test {
    public static function model($replace = false){

        static $store;

        if($replace != false){

            $store = $replace;

        }

        return $store;
    }
}
$mysqli = new mysqli( $_ENV['MYSQL_HOST'], $_ENV['MYSQL_USER'] , $_ENV['MYSQL_PASSWORD'] , $_ENV['MYSQL_DATABASE'] );
$result = $mysqli->query("SHOW COLUMNS FROM users");
test::model($result->fetch_object());
print_r(test::model($result->fetch_object()));
die();
*/
//phpinfo();
//exit;
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
