<?php

class reservaciones extends Controller
{
    public function __construct()
    {
        session_start();
        $this->verify_session();
    }
    public function getSchedules()
    {
        return $this->nameClass->dates();
    }

    public function render()
    {
        parent::__construct();
        $this->loadModel('reserva');
        $reserve = $this->reservations();
        $this->view->value4 = $this->getSchedules();

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

    public function getMenusUser()
    {
        $this->loadModel('menus');
        return $this->nameClass->getMenusUser();
    }

    public function getMenus()
    {
        return $this->nameClass->getMenus();
    }

    

    public function updateReservation()
    {
        extract($_REQUEST);
        $this->loadModel('reserva');
        $this->nameClass->updateReservation(
            $_REQUEST['IDreserva'],
            $_REQUEST['date'],
            $_REQUEST['amount_people'],
            $_REQUEST['schedule'],
            $_REQUEST['detail'],
            $_REQUEST['menu']
        );
    }

    public function changeStatus () {
        extract($_REQUEST);
        $this->loadModel('reserva');
        $this->nameClass->changeStatus($_REQUEST['cancel']);
        echo "<script>alert('status')</script>";
    }
}