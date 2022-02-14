<?php
session_start();
class admint extends Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->view->render('admint', null);
    }
}
