<?php
// Auto detect environment //
function basePath()
{
    // Extract the directory name from SCRIPT_NAME
    // This will get '/php-mvc' from '/php-mvc/about.php'
    $path = dirname($_SERVER['SCRIPT_NAME']);

    // Ensure the path ends with a trailing slash
    return rtrim($path, '/') . '/';
}

function path($uri = '')
{
    // Remove leading slash if present to avoid double slashes
    $uri = ltrim($uri, '/');
    return basePath() . $uri;
}

// End auto detect environment //
$routes = require('routes.php');


function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

function abort($code)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
routeToController($uri, $routes);
