<?php

namespace core; 
require base_path('core/midleWare/Guest.php');
require base_path('core/midleWare/Auth.php');



class Router {
    protected $routes = [];


    public function add($method, $uri, $controller) 
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'midleWare' => null
        ];

        return $this;
    }

    public function get($uri, $controller) 
    {
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function only($key) 
    {
        $this->routes[array_key_last($this->routes)]['midleWare'] = $key;
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) 
        {
            if ($route['uri'] === $uri && $route['method'] === $method)
             {

                if( $route['midleWare'] === 'guest')
                {
                    (new \Guest)->handler();
                }

                if ( $route['midleWare'] === 'auth') {
                    (new \Auth)->handler();
                }
                
                require base_path('http/controller/' . $route['controller']);
                return;
             }
        }

        // abort 
        $this->abort();
    }

    protected function abort($code = 404)
    {
        http_response_code($code);
        require view("response.{$code}.php");
        die();
    }
}


// function router($uri, $routes) {
//     if (array_key_exists($uri, $routes)) {
//         require base_path($routes[$uri]);
//     } else {
//         abort();
//     }
// }

// function abort($response = 404) {
//     http_response_code($response);
//     require view("response.{$response}.php");
//     die();
// }