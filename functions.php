<?php
//Pass no arguments or empty string for base path, or a URI for a specific path
function url($uri = '')
{
    // Extract the directory name from SCRIPT_NAME
    // This will get '/php-mvc' from '/php-mvc/about.php'
    $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') . '/';

    // Remove leading slash if present to avoid double slashes
    $uri = ltrim($uri, '/');

    return $basePath . $uri;
}

function urlMatch($path, $mode = 'exact')
{
    if ($mode === 'exact') {
        // Exact match comparison
        return $_SERVER['REQUEST_URI'] === $path;
    } else {
        // Any other value performs a starts_with match
        return strpos($_SERVER['REQUEST_URI'], $path) === 0;
    }
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}
