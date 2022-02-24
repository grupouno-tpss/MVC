<?php
    class options extends Controller {
        public function __construct()
        {
            parent::__construct();
            $this->authClient(1);
            $this->view->render('options', null);
        }
    }
?>