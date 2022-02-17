<?php

session_start();
class profile extends Controller
{
    public function __construct()
    {
    }

    public function render()
    {
        parent::__construct();

        $this->view->render('profile', null);
    }
}
