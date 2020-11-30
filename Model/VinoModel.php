<?php

class VinoModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_vinoteca;charset=utf8', 'root', ''); 
        
    }

    function GetWines(){ //Trae todos los vinos
        $query = $this->db->prepare("SELECT * FROM vino");
        $query -> execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    function getWineInteger($buscar,$valor){ //buscar un vino por un atributo integer
        $query = $this->db->prepare("SELECT * FROM vino WHERE $valor = ? ");
        $query -> execute(array($buscar));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getWineString($buscar,$valor){//buscar un vino por un atributo string
        $query = $this->db->prepare("SELECT * FROM vino WHERE $valor LIKE ?");
        $query -> execute(array($buscar));
        return $query->fetchAll(PDO::FETCH_OBJ);
 
    }

    function GetWine($id_wine){
        $query = $this->db->prepare("SELECT * FROM vino WHERE id=?");
        $query->execute(array($id_wine));
        return $query->fetch(PDO::FETCH_OBJ);   
    }

    function insertWine($nombre,$descripcion,$ano_cosecha,$origen,$alcohol,$stock,$id_categoria,$imagen = null){
        $pathImg = null;
        if ($imagen){
            $target = 'img/wine/' . uniqid() . '.jpg';
            move_uploaded_file($imagen, $target);
            $pathImg =  $target;
        }
        $query = $this->db->prepare("INSERT INTO vino(nombre,descripcion,ano_cosecha,origen,alcohol,stock,id_categoria,imagen) VALUES(?,?,?,?,?,?,?,?)");
        $query->execute(array($nombre,$descripcion,$ano_cosecha,$origen,$alcohol,$stock,$id_categoria,$pathImg));

    }

    function DeleteWine($id){
        $query = $this->db->prepare("DELETE FROM vino WHERE id=?");
        $query->execute(array($id));
    }

    function updateWine($nombre,$descripcion,$ano_cosecha,$origen,$alcohol,$stock,$categoria,$id,$imagen = null){
        $pathImg = null;
        if ($imagen){
            $target = 'img/wine/' . uniqid() . '.jpg';
            move_uploaded_file($imagen, $target);
            $pathImg =  $target;
        }
        $query = $this->db->prepare("UPDATE vino SET nombre='$nombre',descripcion='$descripcion',ano_cosecha='$ano_cosecha',origen='$origen',alcohol='$alcohol',stock='$stock',id_categoria='$categoria',imagen='$pathImg' WHERE id=?");
        $query->execute(array($id));
    }

    function deleteImage($id){
        $valorVacio='';
        $query = $this->db->prepare("UPDATE vino SET imagen='$valorVacio' WHERE id=?");
        $query->execute(array($id));
    }

}


?>