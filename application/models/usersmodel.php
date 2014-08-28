<?php

class UsersModel
{
    
    function __construct($db) {
        try{
            $this->db = $db; 
        }catch (PDOException $e){
            exit('Database connection could not be established.');
            
        }       
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function verification($username, $password){
    	ob_start();
        session_start();
        $username = stripslashes($username);
        $password = stripslashes($password);
    	$sql = "SELECT id, username, password FROM users WHERE username = :username AND password = :password";
    	$query = $this->db->prepare($sql);
    	$query->execute(array(':username' => $username, ':password'=>$password));
        $query->fetchAll();
    	if($query->rowCount() == 0) // User not found. So, redirect to login_form again.
		{
    		header('location: ' . URL . 'articles/login');
		} else {
			//session_regenerate_id();
			$_SESSION['sess_username'] = $query->$username;
			$_SESSION['sess_user_id'] = $query-strval($id);
			session_write_close();
			header('location: ' . URL . 'articles/index');
		}
    }
}
