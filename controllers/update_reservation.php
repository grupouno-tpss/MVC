<?php
session_start();
class update_reservation extends Controller
{
    public function __construct()
    {
    }

    public function render()
    {
        parent::__construct();
        $this->view->render('update_reservation', null);
    }
}
