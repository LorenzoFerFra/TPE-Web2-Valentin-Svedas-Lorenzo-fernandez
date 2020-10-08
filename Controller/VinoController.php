<?php

require_once "./Model/VinoModel.php";
require_once "./View/VinotecaView.php";
require_once "./Model/CategoriaModel.php";

class VinoController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new VinotecaView();
        $this->model = new VinoModel();
        $this->modelCategoria = new CategoriaModel();
    }

    private function checkLoggedIn(){
        session_start();
        
        if(!isset($_SESSION["EMAIL"])){
            header("Location: ". LOGIN);
            die();
        }else{
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) { 
                header("Location: ". LOGOUT);
                die();
            } 
        
            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }

    function Home(){
        $this->checkLoggedIn();
        
        $wines = $this->model->GetWines();
        $categories = $this->modelCategoria->GetCategories();

        $this->view->ShowHome($wines,$categories);
    }

    function resetHome(){
        $this->view->ShowHomeLocation();
    }
    
    function detailWine($params = null){
        $id_wine = $params[':ID'];
        $wine= $this->model->GetWine($id_wine);

         $this->view->ShowDetailWine($wine);
    }

    function EditWine($params = null){
        $id_wine = $params[':ID'];
        $wine = $this->model->GetWine($id_wine);
        $categories = $this->modelCategoria->GetCategories();

         $this->view->ShowEditWine($wine,$categories);
    }

    function Edit(){
        $this->model->updateWine($_POST['input_nombre'],$_POST['input_descripcion'],$_POST['input_anocosecha'],$_POST['input_origen'],$_POST['input_alcohol'],$_POST['input_stock'],$_POST['input_idcategoria'],$_POST['input_id']);
        $this->view->ShowHomeLocation();
    }

    function InsertWine(){
        $this->model->insertWine($_POST['input_nombre'],$_POST['input_descripcion'],$_POST['input_anocosecha'],$_POST['input_origen'],$_POST['input_alcohol'],$_POST['input_stock'],$_POST['input_idcategoria']);
        $this->view->ShowHomeLocation();
    }

    function DeleteWine($params = null){
        $id_wine = $params[':ID'];
        $this->model->DeleteWine($id_wine);
        $this->view->ShowHomeLocation();
    }



}




?>