<?php

class Articles extends Controller
{
    
    public function index() {
        $articles_model = $this->loadModel('ArticlesModel');
        $articles = $articles_model->getAllArticles();
        require 'application/views/_templates/topMenu.php';
        require 'application/views/articles/index.php';
        require 'application/views/_templates/bottom.php';
    }
    
    /*
     * ACTION: addArticle()
     * This method handles what happend when you move to http://example/articles/addarticle
     * This is not an actuall page, its an ACTION.
     */
    public function addArticle() {
        if(isset($_POST["submit_add_article"])) {
            $articles_model = $this->loadModel('ArticlesModel');
            $articles_model->addArticle($_POST["title"],  $_POST["article"], $_POST["photo"]);
        }
        require  'application/views/_templates/topMenuAdmin.php';
        require 'application/views/articles/addarticle.php';
        require 'application/views/_templates/footerAdmin.php';
        
        //where to go after article is added
       // header('location: ' . URL . 'articles/index');
    }
    
    /*
     * ACTION: deleteArticle()
     * This method handles what happend when you move to http://example/articles/deletearticle
     * This is not an actuall page, its an ACTION.
     */
    public function deleteArticle($article_id) {
        echo 'Message from controller: you are in the controller: Articles, using deleteArticle()';
        
        if(isset($_POST["submit_add_article"])) {
            $articles_model = $this->loadModel('ArticlesModel');
            $articles_model->deleteArticle($article_id);
        }
        
        //where to go after article is deleted
        header('location: ' . URL . 'articles/index');
        
    }
    
    /*
     * We may add showArticle which will be a view for showing a particullar article
     */
    
    public function addImage(){
        if(isset($_POST["submit_image"])){
            $images_model = $this->loadModel('ImagesModel');
            $images_model->addImage($_POST["title"], $_POST["image"]);
        }
        require 'application/views/_templates/topMenuAdmin.php';
        require 'application/views/articles/addimage.php';
    }
}