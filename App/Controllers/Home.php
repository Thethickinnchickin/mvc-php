<?php


namespace App\Controllers;

use \Core\View;

/**
 * Home Controller
 * 
 * 
 */
class Home extends \Core\Controller 
{
    /**
     * Before filter
     *
     * 
     * @return void
     */
    protected function before()
    {
        echo "(before) ";
    }

    /**
     * After filter
     * 
     * @return void
     * 
     */
    protected function after()
    {
        echo " (after)";
    }
    

    public function indexAction()
    {
        View::renderTemplate('Home/index.html', [
            'name'    => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
    }
}