<?php
session_start();
class worker extends Controller
{
    public function __construct()
    {
        //$this->verify_session();
        //$this->AuthEmp();
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

        $this->view->value2 = $this->getMenusReservations();
        $this->view->value3 = $this->getMenus();
        $this->view->value5 = $this->users(1);
        $this->view->render('worker', $reserve);
    }

    public function reservations()
    {
        return $this->nameClass->reservations();
        $this->loadModel('menus');
        $this->nameClass->getMenusUser();
    }

    public function getMenusReservations()
    {
        $this->loadModel('menus');
        return $this->nameClass->getMenusReservations();
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
        );
    }

    public function changeStatus()
    {
        extract($_REQUEST);
        $this->loadModel('reserva');
        $this->nameClass->changeStatus($_REQUEST['cancel']);
        echo "<script>alert('status')</script>";
    }

    public function users($rol)
    {
        $this->loadModel('usuario');
        $data = $this->nameClass->users($rol);
        return $data;
    }
}
