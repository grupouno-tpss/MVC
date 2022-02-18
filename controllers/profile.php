<?php

session_start();
class profile extends Controller
{
    public function __construct()
    {
    }

    public function render()
    {
        parent::__construct();

        $this->view->render('profile', null);
    }

    public function updateUser () {
        extract($_REQUEST);

        $this->loadModel('usuario');

        //echo $_REQUEST['id_usuario']. "<br>";
        //echo $_REQUEST['p_nombre']. "<br>";
        //echo $_REQUEST['s_nombre']. "<br>";
        //echo $_REQUEST['p_apellido']. "<br>";
        //echo $_REQUEST['s_apellido']. "<br>";
        //echo $_REQUEST['email']. "<br>";
        //echo $_REQUEST['password']."<br>";
        //echo $_REQUEST['num_celular']."<br>";
        //echo $_REQUEST['num_telefono']."<br>";

        $this->nameClass->update(
            $_REQUEST['id_usuario'],
            $_REQUEST['p_nombre'],
            $_REQUEST['s_nombre'],
            $_REQUEST['p_apellido'],
            $_REQUEST['s_apellido'],
            $_REQUEST['email'],
            $_REQUEST['password'],
            $_REQUEST['num_celular'],
            $_REQUEST['num_telefono'],
        );
        echo "Actualizar usuario";
    }
}
