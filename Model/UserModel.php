<?php

class UserModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_vinoteca;charset=utf8', 'root', '');
    }
     
    function GetUser($email){
        $query = $this->db->prepare("SELECT * FROM users WHERE email=?");
        $query->execute(array($email));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    function GetUsers(){
        $query = $this->db->prepare("SELECT * FROM users");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function DeleteUser($id){
        $query = $this->db->prepare("DELETE FROM users WHERE id=?");
        $query->execute(array($id));
    }

    function updateUser($admin,$id){
        $query = $this->db->prepare("UPDATE users SET admin='$admin' WHERE id=?");
        $query->execute(array($id));
    }

    function registerUser($email,$password){
        $query = $this->db->prepare("INSERT INTO users(email,password) VALUES(?,?)");
        $query->execute(array($email,$password));
    }
      
}

?>