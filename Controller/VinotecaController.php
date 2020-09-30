<?php

require_once "./Model/VinotecaModel.php";
require_once "./View/VinotecaView.php";

class VinotecaController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new VinotecaView();
        $this->model = new VinotecaModel();
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