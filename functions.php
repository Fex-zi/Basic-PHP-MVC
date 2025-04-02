<?php

function basePath()
{
    // Extract the directory name from the REQUEST_URI
    // This will get '/php-mvc' from '/php-mvc/about.php'
    $path = dirname($_SERVER['SCRIPT_NAME']);

    // Ensure the path ends with a trailing slash if it's not the root
    return $path === '/' ? '/' : $path . '/';
}

function path($uri = '')
{
    // Remove leading slash if present to avoid double slashes
    $uri = ltrim($uri, '/');
    return basePath() . $uri;
}


function urlIs($value)
{
    // Compare the current URI with the provided value
    // The value should already include the base path (e.g., '/php-mvc/about.php')
    return $_SERVER['REQUEST_URI'] === $value;
}
