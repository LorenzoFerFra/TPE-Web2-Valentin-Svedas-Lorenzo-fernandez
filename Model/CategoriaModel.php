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

    function GetCategorie($id){
        $query = $this->db->prepare("SELECT * FROM categoria WHERE id=?");
        $query -> execute(array($id));
        return $query->fetch(PDO::FETCH_OBJ);
    }
    function insertCategorie(){
        $query = $this->db->prepare("INSERT INTO categoria(tipo,color) VALUES(?,?)");
        $query->execute(array($tipo,$color));
    }

}

?>