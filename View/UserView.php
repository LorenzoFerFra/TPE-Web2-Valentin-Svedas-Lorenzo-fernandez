<?php

require_once "./libs/smarty/Smarty.class.php";


class UserView{

    private $title;
    

    function __construct(){
        $this->title = "Login";
    }

    function ShowLogin($message = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('message', $message);

        $smarty->display('templates/login.tpl'); // muestro el template 
    }

    function ShowRegister($message = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo', "Register");
        $smarty->assign('message', $message);

        $smarty->display('templates/register.tpl');
        
    }

}


?>