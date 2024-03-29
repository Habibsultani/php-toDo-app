<?php
function dd($value) {


    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}


function abort($code = 404)
{
    http_response_code($code);
    require view("response.{$code}.php");
    die();
}

function urlIs($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}


function response($condition) {
    if ($condition) {
        abort(Response::FORBIDEN);
    }
}

function base_path($path) {
    return BASE_PATH . $path;
}


function view($path) {
    return base_path('views/' . $path);
}

function logOut() {
    
$_SESSION = [];

session_destroy();

$params = session_get_cookie_params();

setcookie('PHPSESSID', '' , time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly'] );

}
 
function logIn($user) {
    $_SESSION['user'] = $user;
    
} 