<?php

require_once "./libs/smarty/Smarty.class.php";

class VinotecaView{

    private $title;
    

    function __construct(){
        $this->title = "Vinoteca";
    }

    function ShowHome($wines){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('wines', $wines);
      
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

    function ShowAdmin($wines){
       $this->ShowHome($wines);
       $smarty = new Smarty();
       
       $smarty->display('templates/administrate.tpl');  
    }

    function ShowHomeLocation(){
       header("Location: ".BASE_URL."home");
    }

    
}


?>
