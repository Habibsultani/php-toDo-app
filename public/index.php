<?php


const BASE_PATH =  __DIR__ . '/../';

require BASE_PATH . 'core/function.php';


require base_path('core/' . 'Detabase.php');
require base_path('core/' . 'Response.php');



require base_path('core/' . 'Router.php');

$router = new \core\Router();

$routes = require base_path("routes.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);
 