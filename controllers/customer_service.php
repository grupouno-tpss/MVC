<?php

class customer_service extends Controller
{
    public function __construct()
    {
        session_start();
    }

    public function render()
    {
        parent::__construct();
        $this->view->render('customer_service', null);
    }

    public function sendMessage() {

    }
}
