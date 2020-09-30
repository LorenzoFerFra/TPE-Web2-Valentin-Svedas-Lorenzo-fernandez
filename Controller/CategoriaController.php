<?php

require_once "./Model/CategoriaModel.php";
require_once "./View/VinotecaView.php";


class CategoriaController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new CategoriaModel();
        $this->view = new VinotecaView();
    }
    function Home(){
        $categories = $this->model->GetCategories();
        $this->view->ShowCategories($categories);
    }



}





?>