<?php

/** Kim changes in feature branch **/

// router changes

$routes = require('routes.php');

// if ($uri === '/') {
//     require 'controllers/index.php';
// } elseif ($uri === '/about') {
//     require 'controllers/about.php';
// } elseif ($uri === '/contact') {
//     require 'controllers/contact.php';
// }


function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}


function routerToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routerToController($uri, $routes);
