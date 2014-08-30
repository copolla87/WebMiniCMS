<?php

class ImagesModel
{
    
    function __construct($db) {
        try{
            $this->db = $db; 
        }catch (PDOException $e){
            exit('Database connection could not be established.');
            
        }       
    }


    public function getAllImages()
    {
        $sql = "SELECT * FROM images";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function addImage($title, $image)
    {
        $target = $_SERVER['DOCUMENT_ROOT'] . "/PhpProject1/public/images/ ";
        $target = $target . basename($_FILES['image']['name']);
    	//$title = strip_tags($title);
    	//$image = strip_tags($image);
    	$sql = "INSERT INTO images (title, image) VALUES (:title, :target)";
        $query = $this->db->prepare($sql);
        
        $query->execute(array(':title' => $title, ':target' => URL.substr($target, 28)));

        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            echo "saved";
        } else {
            echo "not saved";
        }
    }

    public function deleteImage($image_id)
    {
    	$sql="DELETE FROM images WHERE id = :image_id";
        $query->$this->db->prepare($sql);
        $query->execute(array(':image_id' => $image_id));
    }

}

