<?php
//base_path is not really needed since i moved my index file away from a folder to the root
const BASE_PATH = __DIR__ . '/../';

//require BASE_PATH . 'Core/functions.php';
require 'Core/functions.php';

spl_autoload_register(function ($class) {
    // Core\Database
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    //require base_path("{$class}.php");
    require("{$class}.php");
});

//require base_path('Core/router.php');
require('Core/router.php');

$router = new \Core\Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
