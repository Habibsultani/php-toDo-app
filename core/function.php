<?php
function dd($value) {


    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}


function urlIs($url) {
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