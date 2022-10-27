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
    * @return array
    */

    public function add($route, $params)
    {
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
        foreach ($this->routes as $route => $params) {
            if ($url == $route) {
                $this->params = $params;
                return true;
            }
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