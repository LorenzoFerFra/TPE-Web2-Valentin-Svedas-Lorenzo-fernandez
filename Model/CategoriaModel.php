<?php

class CategoriaModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_vinoteca;charset=utf8', 'root', ''); 
        
    }

    function GetCategories(){
        $query = $this->db->prepare("SELECT * FROM categoria");
        $query -> execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}

?>