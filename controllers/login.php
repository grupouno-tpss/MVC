<?php
session_start();


class login extends Controller
{
    public function __construct()
    {
    }
    public function render()
    {
        parent::__construct();

        $this->view->render('login', null);
    }
    public function consultUser()
    {
        extract($_REQUEST);
        //echo "<script>alert('funcion consultar usuario')</script>";
        $this->loadModel('usuario');
        $this->nameClass->login(
            $_REQUEST['user'],
            $_REQUEST['password']
        );

        if (isset($_SESSION['user_rolID'])) {
            $this->redirect();
        }else{
            echo "<script>alert('No se ha encontrado el usuario con esas credenciales')</script>";
            header('Location: '.constant('URL').'/login');
        }
    }

    public function redirect() {
        $rol = $_SESSION['user_rolID'];

        if ($rol == 3) {
            header('Location: '.constant('URL').'/admint');
        }else if ($rol == 2) {
            header('Location: '.constant('URL').'/worker');
        }else if ($rol == 1) {
            header('Location: '.constant('URL').'/options');
        }
    }

    public function close_session () {
        session_destroy();
        header('Location: '.constant('URL').'/login');
    }
}
