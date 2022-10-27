<?php

/**
 * Front Controller PHP
 */

require '../Core/Router.php';

$router = new Router();

//Adding Routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);


// Displaying the routing table 
// echo '<pre>';
// var_dump($router->getRoutes());
// echo '</pre>';

//Match the requested route
$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)) {
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
} else{
    echo "No route found for URL '$url'";
}
