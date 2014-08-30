<?php

class Home extends Controller
{
    
    /*
     * Handles what happens in my default page: example.com/home/index
     */
    public function index() 
    {
        $articles_model = $this->loadModel('ArticlesModel');
        $articles = $articles_model->getAllArticles();
        
        require 'application/views/_templates/topMenu.php';
        require 'application/views/home/index.php';
        require 'application/views/_templates/bottom.php';
    }
   
    public function exampleOne() 
    {
        echo 'Message from Controller: You are in the controller exampleOne, using the method exampleOne()';
        
        require 'application/views/_templates/header.html';
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

    public function gallery()
    {
        $images_model = $this->loadModel('ImagesModel');
        $images = $images_model->getAllImages();
        require 'application/views/_templates/topMenu.php';
        require 'application/views/home/imageGallery.php';
        require 'application/views/_templates/bottom.php';

    }
}
