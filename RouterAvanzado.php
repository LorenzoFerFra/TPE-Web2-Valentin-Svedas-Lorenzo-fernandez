<?php
    require_once 'Controller/VinoController.php';
    require_once 'Controller/CategoriaController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "VinoController", "Home");
   
  
  
   // $r->addRoute("", "GET", "VinoController", "Home");
    $r->addRoute("detalle/:ID", "GET", "VinoController", "detailWine");

    $r->addRoute("edit/:ID", "GET", "VinoController", "EditWine");
    $r->addRoute("edit/editwine", "POST", "VinoController", "Edit");


    $r->addRoute("insert", "POST", "VinoController", "InsertWine");

    $r->addRoute("delete/:ID", "GET", "VinoController", "DeleteWine"); 
    
    $r->addRoute("categories", "GET", "CategoriaController", "Home");
    $r->addRoute("categorie/volver", "GET", "CategoriaController", "resetHome");
    $r->addRoute("categorie/:ID", "GET", "CategoriaController", "Categorie");



    //Ruta por defecto.
    $r->setDefaultRoute("VinoController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
