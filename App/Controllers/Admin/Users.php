<?php

namespace App\Controllers\Admin;

class Users extends \Core\Controller
{

    /**
     * Before flter
     * 
     * @return void
     */
    protected function before()
    {
        // Make sure an admin user is logged in for example 
        // return false;
    }

    /**
     * Show the index page
     * 
     * @return void
     */
    public function indexAction()
    {
        echo 'User admin index';
    }
}