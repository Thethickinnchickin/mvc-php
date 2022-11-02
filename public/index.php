<?php

/**
 * Front Controller PHP
 */

require '../Core/Router.php';

$router = new Router();

//Adding Routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
// $router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add('admin/{action}/{controller}');


// Displaying the routing table 
// echo '<pre>';
// var_dump($router->getRoutes());
// echo '</pre>';

//Match the requested route



echo '<pre>';
// var_dump($router->getParams());
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo '</pre>';

