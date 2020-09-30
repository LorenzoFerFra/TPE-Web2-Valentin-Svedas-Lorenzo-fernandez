<?php

require_once "./Model/VinoModel.php";
require_once "./View/VinotecaView.php";

class VinoController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new VinotecaView();
        $this->model = new VinoModel();
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




}




?>