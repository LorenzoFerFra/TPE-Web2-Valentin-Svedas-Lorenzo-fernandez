<?php

class VinoModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_vinoteca;charset=utf8', 'root', ''); 
        
    }

    function GetWines(){
        $query = $this->db->prepare("SELECT * FROM vino");
        $query -> execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function GetWine($id_wine){
        $query = $this->db->prepare("SELECT * FROM vino WHERE id=?");
        $query->execute(array($id_wine));
        return $query->fetch(PDO::FETCH_OBJ);   
    }

    function insertWine($nombre,$descripcion,$ano_cosecha,$origen,$alcohol,$stock,$id_categoria){
        $query = $this->db->prepare("INSERT INTO vino(nombre,descripcion,ano_cosecha,origen,alcohol,stock,id_categoria) VALUES(?,?,?,?,?,?,?)");
        $query->execute(array($nombre,$descripcion,$ano_cosecha,$origen,$alcohol,$stock,$id_categoria));

    }

    function DeleteWine($id){
        $query = $this->db->prepare("DELETE FROM vino WHERE id=?");
        $query->execute(array($id));
    }

    function updateWine($nombre,$descripcion,$ano_cosecha,$origen,$alcohol,$stock,$categoria,$id){
        $query = $this->db->prepare("UPDATE vino SET nombre='$nombre',descripcion='$descripcion',ano_cosecha='$ano_cosecha',origen='$origen',alcohol='$alcohol',stock='$stock',id_categoria='$categoria' WHERE id=?");
        $query->execute(array($id));
    }

}


?>