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
    function insertCategorie($tipo,$color){
        $query = $this->db->prepare("INSERT INTO categoria(tipo,color) VALUES(?,?)");
        $query->execute(array($tipo,$color));
    }
    function DeleteCategorie($id){
        $query = $this->db->prepare("DELETE FROM categoria WHERE id=?");
        $query->execute(array($id));
    }
    function updateCategorie($tipo,$color,$id){
        $query = $this->db->prepare("UPDATE categoria SET tipo='$tipo',color='$color',id_categoria='$categoria' WHERE id=?");
        $query->execute(array($id));
    }
}

?>