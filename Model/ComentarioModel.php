<?php

class ComentarioModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_vinoteca;charset=utf8', 'root', ''); 
        
    }

    function getComments(){
        $query = $this->db->prepare("SELECT * FROM comment");
        $query -> execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function getCommentsVino($id){
        $query = $this->db->prepare("SELECT * FROM comment WHERE id_vino=?");
        $query -> execute(array($id));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function getComment($id){
        $query = $this->db->prepare("SELECT * FROM comment WHERE id=?");
        $query -> execute(array($id));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function deleteComment($id){
        $query = $this->db->prepare("DELETE FROM comment WHERE id=?");
        $query->execute(array($id));
        return $query->rowCount();
    }

    function insertComment($usuario,$comentario,$puntaje,$id_vino){
        $query = $this->db->prepare("INSERT INTO comment(usuario,comentario,puntaje,id_vino) VALUES (?,?,?,?)");
        $query->execute(array($usuario,$comentario,$puntaje,$id_vino));
        return $this->db->lastInsertId();
    }


}


?>