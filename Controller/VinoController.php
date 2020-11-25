<?php

require_once "./Model/VinoModel.php";
require_once "./View/VinotecaView.php";
require_once "./Model/CategoriaModel.php";
require_once "./helpers/authHelper.php";

class VinoController{

    private $view;
    private $model;
    private $authHelper;

    function __construct(){

        $this->authHelper = new AuthHelper();
        
        $this->view = new VinotecaView();
        $this->model = new VinoModel();
        $this->modelCategoria = new CategoriaModel();
    }


    function Home(){
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

    function detailWines(){
        $this->authHelper->checkLoggedIn();
        $wines= $this->model->GetWines();

         $this->view->ShowDetailWines($wines);
    }

    function uploadImage(){
        $this->view->showUploadImage();
    }

    function EditWine($params = null){
        if($this->authHelper->checkAdmin()) {
        $id_wine = $params[':ID'];
        $wine = $this->model->GetWine($id_wine);
        $categories = $this->modelCategoria->GetCategories();

         $this->view->ShowEditWine($wine,$categories);
        }else{
            $this->view->ShowHomeLocation();
        }
    }

    function Edit(){
        $this->authHelper->checkLoggedIn();

        if($this->authHelper->checkAdmin()){
            if($_FILES['input_image']['type'] == "image/jpg" || $_FILES['input_image']['type'] == "image/jpeg" || $_FILES['input_image']['type'] == "image/png" ) { 
                $this->model->updateWine($_POST['input_nombre'],$_POST['input_descripcion'],$_POST['input_anocosecha'],$_POST['input_origen'],$_POST['input_alcohol'],$_POST['input_stock'],$_POST['input_idcategoria'],$_POST['input_id'],$_FILES['input_image']['tmp_name']);
                $this->view->ShowHomeLocation();
            }else{
                $this->model->updateWine($_POST['input_nombre'],$_POST['input_descripcion'],$_POST['input_anocosecha'],$_POST['input_origen'],$_POST['input_alcohol'],$_POST['input_stock'],$_POST['input_idcategoria'],$_POST['input_id']);
                $this->view->ShowHomeLocation();
            }
        }else{
            $this->view->ShowHomeLocation();
        }
        
    }

    function InsertWine(){
        if($this->authHelper->checkAdmin()){
            if($_FILES['input_image']['type'] == "image/jpg" || $_FILES['input_image']['type'] == "image/jpeg" || $_FILES['input_image']['type'] == "image/png" ) {
                    $this->model->insertWine($_POST['input_nombre'],$_POST['input_descripcion'],$_POST['input_anocosecha'],$_POST['input_origen'],$_POST['input_alcohol'],$_POST['input_stock'],$_POST['input_idcategoria'], $_FILES['input_image']['tmp_name']);
                    $this->view->ShowHomeLocation();
                }
                else{
                    $this->model->insertWine($_POST['input_nombre'],$_POST['input_descripcion'],$_POST['input_anocosecha'],$_POST['input_origen'],$_POST['input_alcohol'],$_POST['input_stock'],$_POST['input_idcategoria']);
                    $this->view->ShowHomeLocation();
                }
        }else{
            $this->view->ShowHomeLocation();
        }
        
    }

    function DeleteWine($params = null){
        if($this->authHelper->checkAdmin()){
            $id_wine = $params[':ID'];
            $this->model->DeleteWine($id_wine);
            $this->view->ShowHomeLocation();
        }else{
            $this->view->ShowHomeLocation();
        }
        
    }



}

?>