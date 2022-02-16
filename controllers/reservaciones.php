<?php
session_start();

class reservaciones extends Controller
{
    public function __construct()
    {
    }

    public function render()
    {
        parent::__construct();
        $this->loadModel('reserva');
        $reserve = $this->reservations();
        $this->view->value2 = $this->getMenusUser();
        $this->view->value3 = $this->getMenus();
        $this->view->render('reservaciones', $reserve);
    }

    public function reservations()
    {
        return $this->nameClass->reservationsUser();
        $this->loadModel('menus');
        $this->nameClass->getMenusUser();
    }

    public function getMenusUser () {
        $this->loadModel('menus');
        return $this->nameClass->getMenusUser();
    }

    public function getMenus() {
        return $this->nameClass->getMenus();
    }
}
