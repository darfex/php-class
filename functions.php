<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function abort($code)
{
    http_response_code($code);
    require 'views/404.php';
}

function uriIs($uri)
{
    return $_SERVER['REQUEST_URI'] === $uri;
}