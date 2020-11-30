<?php

require_once "./libs/smarty/Smarty.class.php";
require_once "./helpers/authHelper.php";

class VinotecaView{

    private $title;
    private $userEmail;
    

    function __construct(){

        $authHelper = new AuthHelper();
        $this->userEmail = $authHelper->getLoggedUserEmail();
        $this->title = "Vinoteca";
    }

    function ShowHome($wines,$category){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('wines', $wines);
        $smarty->assign('categorias', $category);
        $smarty->assign('userEmail', $this->userEmail);
      
        $smarty->display('templates/wines.tpl'); // muestro el template 
    }

    function ShowDetailWine($wine){
        $smarty = new Smarty();
        $smarty->assign('wine', $wine);
        $smarty->assign('titulo', $this->title);
        $smarty->assign('userEmail', $this->userEmail);
      
        $smarty->display('templates/detalle.tpl');  

    }

    function ShowDetailWines($wines){
        $smarty = new Smarty();
        $smarty->assign('wines', $wines);
        $smarty->assign('titulo', $this->title);
        $smarty->assign('userEmail', $this->userEmail);
      
        $smarty->display('templates/paginacion.tpl');  

    }

    function ShowCategories($category){
        $smarty = new Smarty();
        $smarty->assign('categorias', $category);
        $smarty->assign('titulo', $this->title);
        $smarty->assign('userEmail', $this->userEmail);
        
        $smarty->display('templates/categories.tpl');  

    }

    function ShowEditWine($wine,$category){
        $smarty = new Smarty();
        $smarty->assign('wine', $wine);
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categorias',$category);
        $smarty->assign('userEmail', $this->userEmail);

        $smarty->display('templates/editWine.tpl');
    }

    function ShowEditCategorie($categorie){
        $smarty = new Smarty();
        $smarty->assign('categorie', $categorie);
        $smarty->assign('titulo', $this->title);
        $smarty->assign('userEmail', $this->userEmail);

        $smarty->display('templates/editCategorie.tpl');
    }

    function ShowAllCategorie($category,$wines){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categoria',$category);
        $smarty->assign('wines', $wines);
        $smarty->assign('userEmail', $this->userEmail);

        $smarty->display('templates/categorie.tpl');
    }


    function ShowHomeLocation(){
       header("Location: ".BASE_URL."Home");
    }
    
    function ShowCategoriesLocation(){
        header("Location: ".BASE_URL."categories");
     }

    
}


?>
