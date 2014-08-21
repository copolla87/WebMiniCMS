<?php

class Articles extends Controller
{
    
    public function index() {
        echo 'This is the articles indes, we gonna show all articles like a blog';
        $articles_model = $this->loadModel('ArticlesModel');
        $articles = $articles_model->getAllArticles();
        require 'application/views/_templates/header.php';
        require 'application/views/articles/index.php';
        require 'application/views/_templates/footer.php';
        
        

    }
    
    /*
     * ACTION: addArticle()
     * This method handles what happend when you move to http://example/articles/addarticle
     * This is not an actuall page, its an ACTION.
     */
    public function addArticle() {
        echo 'Message from controller: you are in the controller: Articles, using the method addArticle()';
        require 'application/views/_templates/header.php';
        require 'application/views/articles/addarticle.php';
        require 'application/views/_templates/footer.php';
        if(isset($_POST["submit_add_article"])) {
            $articles_model = $this->loadModel('ArticlesModel');
            $articles_model->addArticle($_POST["title"],  $_POST["article"], $_POST["photo"]);
        }
        
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
            $articles_model->deleteArticle($$article_id);
        }
        
        //where to go after article is deleted
        header('location: ' . URL . 'articles/index');
        
    }
    
    /*
     * We may add showArticle which will be a view for showing a particullar article
     */
}