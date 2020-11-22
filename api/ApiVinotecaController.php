<?php

require_once "./Model/ComentarioModel.php";
require_once "ApiController.php";
require_once "./helpers/authHelper.php";

class ApiVinotecaController extends ApiController{

    private $authHelper;

    function __construct(){
        parent::__construct();
        $this->model = new ComentarioModel();
        $this->view = new ApiView();
        $this->authHelper = new AuthHelper();
    }

    function getComments(){
        $comments= $this->model->getComments();
        $this->view->response($comments, 200);
    }

    function getCommentsVino($params = null){
        $id = $params[':ID'];
        $comments= $this->model->getCommentsVino($id);
        $this->view->response($comments, 200);
    }

    function getComment($params = null) {
        $id = $params[':ID'];
        $comment = $this->model->getComment($id);

        if (!empty($comment)) // verifica si la tarea existe
            $this->view->response($comment, 200);
        else
            $this->view->response("Error", 404);
    }


    function deleteComment($params = null){
        if($this->authHelper->checkAdmin()){

            $id = $params[':ID'];
            $comment = $this->model->deleteComment($id);
            
            if(!empty($comment))
                $this->view->response("El comentario con el id: $id fue eliminado",200);
            else    
                $this->view->response("Error",404);
        }
    }
    
    public function insertComment(){
        if($this->authHelper->checkUser()){
            $body = $this->getData();
            $comment = $this->model->insertComment($body->usuario,$body->comentario,$body->puntaje,$body->id_vino);
            
            if(!empty($comment))
                $this->view->response($this->model->getComment($comment),201);
            else
                $this->view->response("Error",404);
        }
    }


}


