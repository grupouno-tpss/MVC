<?php
class registrarse extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->render('registrarse', null);
    }

    public function addUser()
    {
        extract($_REQUEST);

        $idGenerated = rand();

        $this->loadModel('usuario');
        $this->nameClass->insertar(
            $idGenerated,
            1,
            $_REQUEST['p_nombre'],
            $_REQUEST['s_nombre'],
            $_REQUEST['p_apellido'],
            $_REQUEST['s_apellido'],
            $_REQUEST['email'],
            $_REQUEST['telefono'],
            $_REQUEST['telcelular'],
            $_REQUEST['contraseña'],
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
            $_REQUEST['contraseña'],
        );
    }
}
