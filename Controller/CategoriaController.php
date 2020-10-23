<?php

require_once "./Model/CategoriaModel.php";
require_once "./Model/VinoModel.php";
require_once "./View/VinotecaView.php";
require_once "./helpers/authHelper.php";


class CategoriaController{

    private $model;
    private $modelWine;
    private $view;
    private $authHelper;

    function __construct(){

        $this->authHelper = new AuthHelper();

        $this->model = new CategoriaModel();
        $this->modelWine = new VinoModel();
        $this->view = new VinotecaView();

    }


    function Home(){
      
        $categories = $this->model->GetCategories();
        $this->view->ShowCategories($categories);
    }

    function Categorie($params = null){
        $id_categorie=$params[':ID'];
        $categorie= $this->model->GetCategorie($id_categorie);
        $wines= $this->modelWine->GetWines();

        $this->view->ShowAllCategorie($categorie,$wines);

    }
    function resetHome(){
        $this->view->ShowCategoriesLocation();
    }

    function InsertCategorie(){
        if($this->authHelper->checkAdmin()){
            $this->model->insertCategorie($_POST['input_tipo'],$_POST['input_color']);
            $this->resetHome();
        }else{
            $this->resetHome();
        }
    }

    function DeleteCategorie($params = null){
        if($this->authHelper->checkAdmin()){
            $id_categorie = $params[':ID'];
            $this->model->DeleteCategorie($id_categorie);
            $this->resetHome();
        }else{
            $this->resetHome();
        }
        
    }
    function EditCategorie($params = null){
        if($this->authHelper->checkAdmin()){
            $id_categorie = $params[':ID'];
            $categorie = $this->model->GetCategorie($id_categorie);
            $this->view->ShowEditCategorie($categorie);
        }else{
            $this->resetHome();
        }
        
    }
    function Edit(){
        $this->authHelper->checkLoggedIn();
        $this->model->updateCategorie($_POST['input_tipo'],$_POST['input_color'],$_POST['input_id']);
        $this->resetHome();
    }
    





}





?>