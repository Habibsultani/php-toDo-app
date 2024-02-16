<?php


$routes = require base_path("routes.php");

function router($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

function abort($response = 404) {
    http_response_code($response);
    require view("response.{$response}.php");
    die();
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


router($uri, $routes);