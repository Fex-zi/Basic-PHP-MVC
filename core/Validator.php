<?php
class Validator
{

    public static function string($value, $min = 1, $max = INF) //INFINITY and use ::to trigger static functon without clas
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {

        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
