<?php

class AuthHelper{

    public function __construct() {}

    public function login($user) {
        // INICIO LA SESSION Y LOGUEO AL USUARIO
        session_start();
        $_SESSION['ID_USER'] = $user->id;
        $_SESSION['EMAIL'] = $user->email;
        $_SESSION['ADMIN'] = $user->admin;
        $_SESSION['LAST_ACTIVITY'] = time();
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    public function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['ID_USER'])) {
            header('Location: ' . LOGIN);
            die();
        } else{
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) { 
                header("Location: ". LOGOUT);
                die();
            } 
            $_SESSION['LAST_ACTIVITY'] = time();
        }    
    }

    public function checkAdmin(){
        if($_SESSION['ADMIN'] == 0 || $_SESSION['ADMIN'] == null){
            return false;
        }else{
            return true;
        }
    }

    public function getLoggedUserEmail() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        return $_SESSION['EMAIL'];
    }
}





?>