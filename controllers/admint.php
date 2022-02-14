<?php
session_start();
class admint extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $users = $this->users(1);
        $this->view->render('admint', $users);
    }

    public function users($rol) {
        $this->loadModel('usuario');

        return $this->nameClass->users($rol);
    }
}
