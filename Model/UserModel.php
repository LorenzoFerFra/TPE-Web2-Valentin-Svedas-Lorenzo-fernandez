<?php

class UserModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_vinoteca;charset=utf8', 'root', '');
    }
     
    function GetUser($user){
        $query = $this->db->prepare("SELECT * FROM users WHERE email=?");
        $query->execute(array($user));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function registerUser($email,$password){
        $query = $this->db->prepare("INSERT INTO users(email,password) VALUES(?,?)");
        $query->execute(array($email,$password));
    }
      
}

?>