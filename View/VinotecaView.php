<?php

require_once "./libs/smarty/Smarty.class.php";

class VinotecaView{

    private $title;
    

    function __construct(){
        $this->title = "Vinoteca el mendocino";
    }

    function ShowHome($wines){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('vinos', $wines);
        
        $smarty->display('templates/vinoteca.tpl'); // muestro el template 
    }

    function ShowDetailWine($wine){
        $smarty = new Smarty();
        $smarty->assign('wine', $wine);
      
        $smarty->display('templates/detalle.tpl');  

    }

    function ShowCategories($category){
        $smarty = new Smarty();
        $smarty->assign('categorias', $category);
      
        $smarty->display('templates/categories.tpl');  

    }

    function ShowHomeLocation(){
       header("Location: ".BASE_URL."home");
    }

    
}


?>
