<?php
class options extends Controller
{
    public function __construct()
    {
        session_start();
        $this->verify_session();
    }

    public function render()
    {
        parent::__construct();
        
        $this->view->render('options', null);
    }
}
