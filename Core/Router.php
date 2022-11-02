<?php
/**
 * Associative array of routess (the routing table)
 *
 * 
 * 
 */


 

class Router
{
    /**
    * Associative array of routes 
    * @var array
    */

    protected $routes = [];

    /**
    * Parameters of the matched route 
    * @var array
    */

    protected $params = [];


    /**
    * Add a route to the routing table 
    * @param string $route The route URL
    * @param array $params Parameters (controller, action, etc.)
    * 
    * @return void
    */

    public function add($route, $params = [])
    {
        // Convert the route to a regular expression: escape forward slashes
        $route = preg_replace("/\//", "\\/", $route);

        // Convert varibales e.g. {controller}
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);

        // Add start and end delimeters and case insensitive flag
        $route = '/^' . $route . '$/i';

        $this->routes[$route] = $params;
    }

    public function getRoutes()
    {
        return $this -> routes;
    }

    /**
    * Match the route to the routes in the routing table, setting the $params
    * property if a route is found
    * @param string $url
    * @return boolean true if a match found, false otheerwise
    *
    */

    public function match($url)
    {
        // foreach ($this->routes as $route => $params) {
        //     if ($url == $route) {
        //         $this->params = $params;
        //         return true;
        //     }
        // }

        //Match to the fixed URL format /controller/action
        $reg_exp = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/";

        if (preg_match($reg_exp, $url, $matches)) {
            // Get named capture grup values
            $params = [];

            foreach ($matches as $key => $match) {
                if (is_string($key)) {
                    $params[$key] = $match;
                }
            }

            $this->params = $params;
            return true;
        }

        return false;
    }

    /**
    * Get the currently matched parameters
    *
    * @return array
    */
    public function getParams()
    {
        return $this->params;
    }
}