ffffff
<?php
require 'application/lib/Autoloader.php';
use application\lib\Debug;
use application\lib\Config;
use application\core\Router;

Autoloader::register();

session_start();

Config::init();

$debug = new Debug();
$router = new Router();
$router->run();