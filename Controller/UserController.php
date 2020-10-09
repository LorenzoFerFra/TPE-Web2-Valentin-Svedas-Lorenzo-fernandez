<?php

require_once "./View/UserView.php";
require_once "./Model/UserModel.php";
require_once "./helpers/authHelper.php";

class UserController{

    private $view;
    private $model;
    private $authHelper;

    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();

    }

    function Login(){
        $this->view->ShowLogin();

    }

    function Logout(){
        $this->authHelper->logout();
        header("Location: ".LOGIN);

    }

    function VerifyUser(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];
        if(isset($user)){
            $userFromDB = $this->model->GetUser($user);
            if(isset($userFromDB) && $userFromDB){
                // Existe el usuario
                if (password_verify($pass, $userFromDB->password)){
                    $this->authHelper->login($userFromDB);

                    header("Location: ".BASE_URL."Home");
                }else{
                    $this->view->ShowLogin("Contraseña incorrecta");
                }
            }else{
                // No existe el user en la DB
                $this->view->ShowLogin("El usuario no existe");
            }
        }
    }

    function Register(){
        $this->view->ShowRegister();
    }

    function RegisterUser(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];
        if (!(empty($user)) && !(empty($pass))) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);

            $this->model->registerUser($user,$hash);
            $this->view->ShowLogin();
        }else
            $this->view->ShowRegister("Faltan datos");
    }

}


?>