<?php

use  PHPMailer\PHPMailer\PHPMailer;
use  PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require  'phpmailer/PHPMailer/src/Exception.php';
require  'phpmailer/PHPMailer/src/PHPMailer.php';
require  'phpmailer/PHPMailer/src/SMTP.php';

class email extends Controller
{

    private $bodyMessage;
    private $from;
    private $address;

    public function render()
    {
        parent::__construct();
        $this->view->render("email", null);
        $this->sendEmail();
    }

    public function sendEmail()
    {
        //Load Composer's autoloader
        require '../vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 2;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'stivenjhojan011@gmail.com';                     //SMTP username
            $mail->Password   = constant('MAIL-PASSWORD');                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom(constant('MAIL-FROM'), 'Ichiraku Ramen');
            $mail->addAddress('andresricaute98@gmail.com', 'Jhojan');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');-

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Hola desde SRI';
            $mail->Body    = '<h1>Buenas Ramos</h1>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'El mensaje ha sido enviado';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
