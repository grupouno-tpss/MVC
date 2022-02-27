<?php
use  PHPMailer\PHPMailer\PHPMailer ;
use  PHPMailer\PHPMailer\Exception ;

require  'phpmailer/PHPMailer/src/Exception.php' ;
require  'phpmailer/PHPMailer/src/PHPMailer.php' ;
require  'phpmailer/PHPMailer/src/SMTP.php' ;

class email extends Controller{
    public function render () {
        parent::__construct();
        $this->view->render("email", null);
    }
}
