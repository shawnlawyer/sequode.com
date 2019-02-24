<?php
define("BASE_PATH", realpath('./'));
require_once('vendor/autoload.php');
use Symfony\Component\Dotenv\Dotenv;

$dotenv = (new Dotenv())->load(BASE_PATH . '/.env');
(new \Whoops\Run())->pushHandler(new Whoops\Handler\PrettyPageHandler())->register();
$sequode = new \Sequode\Sequode('SQDEa0b14c475d6a6ffad52060091f9a973f');
$sequode->console();