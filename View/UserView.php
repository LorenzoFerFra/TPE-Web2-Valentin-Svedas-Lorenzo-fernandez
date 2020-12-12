<?php

require_once "./libs/smarty/Smarty.class.php";
require_once "./helpers/authHelper.php";



class UserView{

    private $title;
    private $admin;
    

    function __construct(){
        $authHelper = new AuthHelper();
        $this->title = "Vinoteca";
        $this->admin = $authHelper->checkAdmin();
    }

    function ShowLogin($message = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('message', $message);
        $smarty->assign('userEmail', "");
        $smarty->assign('admin', $this->admin);

        $smarty->display('templates/login.tpl'); // muestro el template 
    }

    function ShowRegister($message = ""){
        $smarty = new Smarty();
        $smarty->assign('titulo', $this->title);
        $smarty->assign('message', $message);
        $smarty->assign('userEmail', "");
        $smarty->assign('admin', $this->admin);

        $smarty->display('templates/register.tpl');
        
    }
    function ShowUsersEdit($users){
        $smarty = new Smarty();
        $smarty->assign('users', $users);
        $smarty->assign('titulo', $this->title);
        $smarty->assign('userEmail', "");
        $smarty->assign('admin', $this->admin);

        $smarty->display('templates/adminUsers.tpl');
    }

    function ShowUsersLocation(){
        header("Location: ".BASE_URL."usersEdit");
     }

    function ShowLoginLocation(){
        header("Location: ".LOGIN);
     }

}


?>