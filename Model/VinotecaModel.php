<?php

class VinotecaModel{

    private $db

    function __construct(){
        $this->$db = new PDO('mysql:host=localhost;'.'dbname=db_vinoteca;charset=utf8', 'root', ''); 
    }

    function GetWines(){
        $query = $this->$db->prepare("SELECT * FROM vinos WHERE id=?");
        $query -> execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}


?>