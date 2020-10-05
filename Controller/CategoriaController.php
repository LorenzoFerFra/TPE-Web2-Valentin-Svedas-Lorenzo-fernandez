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
        $this->model->insertCategrie($_POST['input_tipo'],$_POST['input_color']);
        $this->view->ShowCategoriesLocation();
    }
    



}





?>