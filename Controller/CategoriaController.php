<?php

require_once "./Model/CategoriaModel.php";
require_once "./Model/VinoModel.php";
require_once "./View/VinotecaView.php";


class CategoriaController{

    private $model;
    private $modelWine;
    private $view;

    function __construct(){
        $this->model = new CategoriaModel();
        $this->modelWine = new VinoModel();
        $this->view = new VinotecaView();

    }

    private function checkLoggedIn(){
        session_start();
        
        if(!isset($_SESSION["EMAIL"])){
            header("Location: ". LOGIN);
            die();
        }else{
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) { 
                header("Location: ". LOGOUT);
                die();
            } 
        
            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }

    function Home(){
        $this->checkLoggedIn();
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
<<<<<<< HEAD
        $this->model->insertCategorie($_POST['input_tipo'],$_POST['input_color']);
        $this->resetHome();
    }

    function DeleteCategorie($params = null){
        $id_categorie = $params[':ID'];
        $this->model->DeleteCategorie($id_categorie);
        $this->view->ShowHomeLocation();
=======
        $this->model->insertCategrie($_POST['input_tipo'],$_POST['input_color']);
        $this->view->ShowCategoriesLocation();
>>>>>>> f7b49650a86d1a81caeb79fd31931d02061a7e27
    }
    



}





?>