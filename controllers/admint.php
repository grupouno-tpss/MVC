<?php
session_start();
class admint extends Controller
{
    public function __construct()
    {
    }

    public function render()
    {
        parent::__construct();
        $this->loadModel('usuario');
        $this->view->value3 = $this->users(1);
        $users = $this->users(2);
        $dates = $this->datesNotAvailable();
        $this->view->value2 = $dates;
        $this->view->render('admint', $users);
    }

    public function users($rol)
    {
        $data = $this->nameClass->users($rol);
        return $data;
    }

    public function deleteUser()
    {
        $this->loadModel('usuario');
        $this->nameClass->delete($_GET['user']);
    }

    public function date()
    {
        extract($_REQUEST);
        $explodeDate = explode('-', $_REQUEST['date']);
        $date = $explodeDate[0] . '/' . $explodeDate[1] . '/' . $explodeDate[2];


        $this->nameClass->insertDate($explodeDate, $date);

        echo "<script>alert('" . $date . "')</script>";
    }

    public function datesNotAvailable()
    {
        $this->loadModel('reserva');
        return $this->nameClass->datesNotAvailable();
    }
}
