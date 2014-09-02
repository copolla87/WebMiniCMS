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
    
    public function addArticle($title, $article, $photo)
    {
        $target = $_SERVER['DOCUMENT_ROOT'] . "/PhpProject1/public/articlesImages/ ";
        $target = $target . basename($_FILES['photo']['name']);
        $sql = "INSERT INTO articles (title, article, photo) VALUES (:title, :article, :target)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':title' => $title, ':article' => $article, ':target' => URL.substr($target, 28)));

        if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
            echo "saved";
        } else {
            echo "not saved";
        }

        /*
        $title = strip_tags($title);
        //$photo = strip_tags($photo); //Photo strip tags or another procedure???
        
        $filename = $_FILES['photo']['name'];
        $tempname = $_FILES['photo']['tmp_name'];

        $fp = fopen($tempname, 'r');
        $imgContent = fread($fp, filesize($tempname));
        fclose($fp);

        $article = strip_tags($article);

        $sql = "INSERT INTO articles (title, article, photo) VALUES (:title, :article, :photo)";
        $query = $this->db->prepare($sql);
        
        $query->execute(array(':title' => $title, ':article' => $article, 'photo' => $imgContent));

        */
    }
    
    public function deleteArticle($article_id)
    {
        $sql="DELETE FROM articles WHERE id = :article_id";
        $query->$this->db->prepare($sql);
        $query->execute(array(':article_id' => $article_id));
    }

    public function getLastThree(){
        $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 3";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();

    }
}

