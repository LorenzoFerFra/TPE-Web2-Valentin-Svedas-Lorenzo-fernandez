<?php
    require_once 'RouterClass.php';
    require_once 'api/ApiVinotecaController.php';
    
    $r = new Router();

    // rutas
    $r->addRoute("comments", "GET", "ApiVinotecaController", "getComments");
    $r->addRoute("comments/:ID", "DELETE", "ApiVinotecaController", "deleteComment");
    $r->addRoute("comments", "POST", "ApiVinotecaController", "insertComment");
    //$r->addRoute("comments/:ID", "POST", "ApiVinotecaController", "insertComments");


    //run
    $r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
?>
