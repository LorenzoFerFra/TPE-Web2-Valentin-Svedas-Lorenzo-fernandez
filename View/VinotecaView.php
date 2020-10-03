<?php

require_once "./libs/smarty/Smarty.class.php";

class VinotecaView{

    private $title;
    

    function __construct(){
        $this->title = "Vinoteca";
    }

    function ShowHome($wines,$category){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('wines', $wines);
        $smarty->assign('categorias', $category);
      
        $smarty->display('templates/wines.tpl'); // muestro el template 
    }

    function ShowDetailWine($wine){
        $smarty = new Smarty();
        $smarty->assign('wine', $wine);
        $smarty->assign('titulo', $this->title);
      
        $smarty->display('templates/detalle.tpl');  

    }

    function ShowCategories($category){
        $smarty = new Smarty();
        $smarty->assign('categorias', $category);
        $smarty->assign('titulo', $this->title);
        
        $smarty->display('templates/categories.tpl');  

    }

    function ShowEditWine($wine,$category){
        $smarty = new Smarty();
        $smarty->assign('wine', $wine);
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categorias',$category);

        $smarty->display('templates/editWine.tpl');
    }

    function ShowAllCategorie($category,$wines){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('categoria',$category);
        $smarty->assign('wines', $wines);

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
