<?php

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Simple Array-Based Router
$uri = $_SERVER['REQUEST_URI'];

// Log the raw URI for debugging
error_log("Raw URI: " . $uri);

// Remove query string if present
$uri_parts = explode('?', $uri, 2);
$uri = $uri_parts[0];

// Check which environment we're in (development or production)
$is_dev = strpos($uri, '/PHP-MVC/') === 0;

// Set base path based on environment detection
$base_path = $is_dev ? '/PHP-MVC/' : '/';

// Process the path
$path = str_replace($base_path, '', $uri);
$path = trim($path, '/');

// Array of valid routes
$routes = [
    'about' => 'about.php',
    'contact' => 'contact.php',
];

// Check if the path exists in our routes array
if (array_key_exists($path, $routes)) {
    if (file_exists($routes[$path])) {
        require $routes[$path];
        exit;
    } else {
        // If file doesn't exist yet
        echo "Page coming soon";
        exit;
    }
} else {
    // Default homepage content



    require "views/index.view.php";
}
