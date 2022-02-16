<?php
session_start();
class worker extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $reservations = $this->reservations();

        $this->view->render('worker', $reservations);
    }

    public function reservations () {
        $this->loadModel('reserva');

        return $this->nameClass->reservations();
    }

    public function archivar() {
        extract($_REQUEST);
        $this->nameClass->statusReserve($a);
        echo "<script>alert('archivar')</script>";
    }
}
