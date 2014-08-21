<?php

class ArticlesModel
{
    
    function __construct($db) {
        try{
            $this->db = $db; 
        }catch (PDOException $e){
            exit('Database connection could not be established.');
            
        }       
    }
    
    public function getAllArticles()
    {
        $sql = "SELECT * FROM articles";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    
    public function addArticle($title, $article)
    {
        $title = strip_tags($title);
        //$photo = strip_tags($photo); //Photo strip tags or another procedure???
        $article = strip_tags($article);

        $sql = "INSERT INTO articles (title, article) VALUES (:title, :article)";
        $query = $this->db->prepare($sql);
        
        $query->execute(array(':title' => $title, ':article' => $article));
    }
    
    public function deleteArticle($article_id)
    {
        $sql="DELETE FROM articles WHERE id = :article_id";
        $query->$this->db->prepare($sql);
        $query->execute(array(':article_id' => $article_id));
    }
}

