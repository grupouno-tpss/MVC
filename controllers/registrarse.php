<?php
class registrarse extends Controller
{

    public function __construct()
    {
        session_start();
    }

    public function render()
    {
        parent::__construct();

        if (isset($_SESSION['user_rolID'])) 
        {
            header('Location: '.constant('URL').'/login');
        }

        $this->view->render('registrarse', null);
    }

    public function addUser()
    {
        extract($_REQUEST);

        $idGenerated = rand();
        $rol;

        if (isset($_REQUEST['rol'])) {
            $rol = $_REQUEST['rol'];
        } else {
            $rol = 1;
        }

        $this->loadModel('usuario');
        $this->nameClass->insertar(
            $idGenerated,
            $rol,
            $_REQUEST['p_nombre'],
            $_REQUEST['s_nombre'],
            $_REQUEST['p_apellido'],
            $_REQUEST['s_apellido'],
            $_REQUEST['email'],
            $_REQUEST['telefono'],
            $_REQUEST['telcelular'],
            password_hash($_REQUEST['contraseña'], PASSWORD_BCRYPT)
        );
    }

    public function addUserRol()
    {
        extract($_REQUEST);

        $idGenerated = rand();
        echo $rolUser = $_REQUEST['rol'];

        $this->loadModel('usuario');
        $this->nameClass->insertar(
            $idGenerated,
            $rolUser,
            $_REQUEST['p_nombre'],
            $_REQUEST['s_nombre'],
            $_REQUEST['p_apellido'],
            $_REQUEST['s_apellido'],
            $_REQUEST['email'],
            $_REQUEST['telefono'],
            $_REQUEST['telcelular'],
            $_REQUEST['contraseña']
        );
    }
}
