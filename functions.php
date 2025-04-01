<?php

/**
 * Get the base path of the application
 * 
 * @return string The base path (e.g., '/php-mvc')
 */
function basePath()
{
    // Extract the directory name from the REQUEST_URI
    // This will get '/php-mvc' from '/php-mvc/about.php'
    $path = dirname($_SERVER['SCRIPT_NAME']);

    // Ensure the path ends with a trailing slash if it's not the root
    return $path === '/' ? '/' : $path . '/';
}

/**
 * Create a path by combining the base path with the given URI
 * 
 * @param string $uri The URI to append to the base path
 * @return string The complete path
 */
function path($uri = '')
{
    // Remove leading slash if present to avoid double slashes
    $uri = ltrim($uri, '/');
    return basePath() . $uri;
}

/**
 * Check if the current URI matches the given value
 * 
 * @param string $value The URI to check against (should include the base path)
 * @return bool True if the URI matches, false otherwise
 */
function urlIs($value)
{
    // Compare the current URI with the provided value
    // The value should already include the base path (e.g., '/php-mvc/about.php')
    return $_SERVER['REQUEST_URI'] === $value;
}
