<?php
session_start();
class worker extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->render('worker', null);
    }

    public function reservations () {
        $this->loadModel('reserva');
    }
}
