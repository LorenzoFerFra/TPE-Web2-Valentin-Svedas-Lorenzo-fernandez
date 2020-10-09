<?php
    require_once 'Controller/VinoController.php';
    require_once 'Controller/CategoriaController.php';
    require_once "Controller/UserController.php";
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "VinoController", "Home");
    $r->addRoute("edit/Home", "GET", "VinoController", "resetHome");
    $r->addRoute("edit/Home", "GET", "CategoriaController", "resetHome");
  
    $r->addRoute("detalle/Home", "GET", "VinoController", "resetHome");
    $r->addRoute("detalle/categories", "GET", "CategoriaController", "resetHome");

   // $r->addRoute("", "GET", "VinoController", "Home");
    $r->addRoute("detalle/:ID", "GET", "VinoController", "detailWine");

    $r->addRoute("edit/:ID", "GET", "VinoController", "EditWine"); 
    $r->addRoute("edit/editwine", "POST", "VinoController", "Edit");
    $r->addRoute("editCategorie/:ID", "GET", "CategoriaController", "EditCategorie"); 
    $r->addRoute("editCategorie/edit", "POST", "CategoriaController", "Edit");


    $r->addRoute("insert", "POST", "VinoController", "InsertWine");
    $r->addRoute("insertCategorie", "POST", "CategoriaController", "InsertCategorie");

    $r->addRoute("delete/:ID", "GET", "VinoController", "DeleteWine");
    $r->addRoute("deleteCategorie/:ID", "GET", "CategoriaController", "DeleteCategorie"); 
    
    $r->addRoute("categories", "GET", "CategoriaController", "Home");
    $r->addRoute("categorie/volver", "GET", "CategoriaController", "resetHome");
    
    $r->addRoute("categorie/:ID", "GET", "CategoriaController", "Categorie");

    $r->addRoute("verifyUser", "POST", "UserController", "VerifyUser");

    $r->addRoute("login", "GET", "UserController", "Login");
    $r->addRoute("logout", "GET", "UserController", "Logout");
    $r->addRoute("register", "GET", "UserController", "Register");
    $r->addRoute("registerUser", "POST", "UserController", "RegisterUser");



    //Ruta por defecto.
    $r->setDefaultRoute("VinoController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
