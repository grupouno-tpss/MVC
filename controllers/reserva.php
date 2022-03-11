<?php
session_start();
class reserva extends Controller
{
    public $menus;
    public function __construct()
    {
        $this->verify_session();
    }

    public function render()
    {
        parent::__construct();
        $this->loadModel('reserva');
        $this->view->value3= $this->getServices();
        $hours = $this->schedules();
        $this->view->value2 = $this->getDatesNotAvailables();
        $this->view->menus = $this->getMenus();
        $this->view->categories = $this->getCategories();
        $this->view->render('reserva', $hours);
    }

    public function getMenus()
    {
        $this->loadModel('menus');
        return $this->nameClass->getMenus();
    }

    public function addReserve()
    {
        extract($_REQUEST);

        $idGenerated = rand();
        $this->loadModel('reserva');
        $this->nameClass->insertReserve(
            $idGenerated,
            $_REQUEST['fecha'],
            $_REQUEST['hora'],
            $_REQUEST['cantPersonas'],
            $_REQUEST['tipoServicio'],
            $_REQUEST['especificacion'],
            $_REQUEST['menu']
        );
    }

    public function schedules()
    {
        return $this->nameClass->dates();
    }

    public function getDatesNotAvailables()
    {
        return $this->nameClass->getDatesNotAvailables();
    }

    public function getCategories()
    {
        return $this->nameClass->getCategories();
    }

    public function getServices () {
        return $this->nameClass->getServices();
    }
}
