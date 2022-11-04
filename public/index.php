<?php

/**
 * Front controller
 *
 * PHP version 5.4
 */

require_once dirname(__DIR__) . '/vendor/autoload.php';

// require '../App/Controllers/Posts.php';
 
// //Require the Router
// require '../Core/Router.php';
 
// //Require home class
// require '../App/Controllers/Home.php';

/**
 * Autoloader
 */
spl_autoload_register(function ($class) {
    $root = dirname(__DIR__);   // get the parent directory
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $root . '/' . str_replace('\\', '/', $class) . '.php';
    }
});

/**
 * Routing
 */

// require '../App/Controllers/Posts.php';
// require '../App/Controllers/Home.php';

/**
 * Routing
 */
// require '../Core/Router.php';
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

$url = $_SERVER['QUERY_STRING'];
    
$router->dispatch($url);
