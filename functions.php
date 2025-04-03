<?php

function urlIs($value)
{
    // Compare the current URI with the provided value
    // The value should already include the base path (e.g., '/php-mvc/about.php')
    return $_SERVER['REQUEST_URI'] === $value;
}
