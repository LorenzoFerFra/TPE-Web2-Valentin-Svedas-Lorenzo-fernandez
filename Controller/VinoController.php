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

    function Home(){
        $wines = $this->model->GetWines();
        $this->view->ShowHome($wines);
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




}




?>