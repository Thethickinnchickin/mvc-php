<?php


namespace App\Controllers;

/**
 * Home Controller
 * 
 * 
 */
class Home 
{
    /**
     * Show the index page
     * 
     * @return void
     */
    public function index() {
        echo 'Hello from the index acion in the Home controller';
    }

    public function addNew()
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }
}