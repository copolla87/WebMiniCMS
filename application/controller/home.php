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

    public function contact()
    {
        require 'application/views/_templates/topMenu.php';
        require 'application/views/home/contact.php';
        require 'application/views/_templates/bottom.php';
        if(isset($_POST["sent_mail"])) {
            /* Set e-mail recipient */
            $myemail = "copolla87@gmail.com";/* Check all form inputs using check_input function */
    
            /* Check all form inputs using check_input function */
            $name =$_POST['inputName'];
            $email = $_POST['inputEmail'];
            $subject = $_POST['inputSubject'];
            $message = $_POST['inputMessage'];

            /* If e-mail is not valid show error message */
            /*
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
            {
                show_error("Invalid e-mail address");
            }
            */
            mail($myemail, $email,$subject, $message);
        }
    }

}
