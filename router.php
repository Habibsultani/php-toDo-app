<?php


$routes = require "routes.php";

function router($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($response = 404) {
    http_response_code($response);
    require "views/response.{$response}.php";
    die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


router($uri, $routes);