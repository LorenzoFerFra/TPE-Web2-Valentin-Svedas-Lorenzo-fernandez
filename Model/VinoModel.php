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

    function insertWine($nombre,$descripcion,$ano_cosecha,$origen,$alcohol,$stock){
        $query = $this->db->prepare("INSERT INTO task(nombre,descripcion,ano_cosecha,origen,alcohol,stock) VALUES(?,?,?,?)");
        $query->execute(array($nombre,$descripcion,$ano_cosecha,$origen,$alcohol,$stock));

    }

    function deleteWine($id_wine){
        $query = $this->db->prepare("DELETE FROM wine WHERE id=?");
        $query->execute(array($wine_id));
    }

    
    function updateWine($id_wine){
        $query = $this->db->prepare("UPDATE vino SET stock=1 WHERE id=?");
        $query->execute(array($wine_id));
    }

}


?>