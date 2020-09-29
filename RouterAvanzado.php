<?php
    require_once 'Controller/VinotecaController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "VinotecaController", "Home");
    $r->addRoute("", "GET", "VinotecaController", "Home");

    //Esto lo veo en TasksView
    $r->addRoute("insert", "POST", "VinotecaController", "InsertTask");

    $r->addRoute("delete/:ID", "GET", "VinotecaController", "BorrarLaTaskQueVienePorParametro");
    $r->addRoute("completar/:ID", "GET", "VinotecaController", "MarkAsCompletedTask");

    //Ruta por defecto.
    $r->setDefaultRoute("VinoController", "Home");

    //Advance
    $r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
