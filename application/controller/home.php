<?php

class Home extends Controller
{
    
    /*
     * Handles what happens in my default page: example.com/home/index
     */
    public function index() 
    {
        echo 'Message from controller: controller home page using method index';
        
        require 'application/views/_templates/header.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/footer.php';
    }
   
    public function exampleOne() 
    {
        echo 'Message from Controller: You are in the controller exampleOne, using the method exampleOne()';
        
        require 'application/views/_templates/header.php';
        require 'application/views/home/example_one.php';
        require 'application/views/_templates/footer.php';
    }
    
    public function exampleTwo() 
    {
        echo 'Message from Controller: You are in the controller example two, using the method exampleTwo()';
        
        /*
         * require 'application/views/.....
         */
    }
}
