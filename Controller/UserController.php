<?php

require_once "./View/UserView.php";
require_once "./View/VinotecaView.php";
require_once "./Model/UserModel.php";
require_once "./helpers/authHelper.php";

class UserController{

    private $VinotecaView;
    private $view;
    private $model;
    private $authHelper;

    function __construct(){
        $this->view = new UserView();
        $this->viewVino = new VinotecaView();
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();

    }

    function Login(){
        $this->view->ShowLogin();
    }
    
    function resetLogin(){
        $this->view->ShowLoginLocation();
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

    function RegisterUser(){//registra al usuario en la base de datos y entra directamente
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];
        if (!(empty($user)) && !(empty($pass))) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);

            $this->model->registerUser($user,$hash);
            $userFromDB = $this->model->GetUser($user);
            $this->authHelper->login($userFromDB);
            $this->viewVino->ShowHomeLocation();

        }else
            $this->view->ShowRegister("Faltan datos");
    }
    function UsersEdit(){
        if($this->authHelper->checkAdmin()){
        $users = $this->model->GetUsers();
        $this->view->ShowUsersEdit($users);
    }else{
        $this->viewVino->ShowHomeLocation();
    }
}
    function editUser(){
        $this->model->updateUser($_POST['input_admin'],$_POST['input_id']);
        $this->view->ShowUsersLocation();
    }

    function deleteUser($params = null){
            $id_user = $params[':ID'];
            $this->model->DeleteUser($id_user);
            $this->view->ShowUsersLocation();
    }

}


?>