<?php

use  phpmailer\phpmailer\PHPMailer;
use  phpmailer\phpmailer\Exception;
use phpmailer\phpmailer\SMTP;

require  'phpmailer/phpmailer/src/Exception.php';
require  'phpmailer/phpmailer/src/PHPMailer.php';
require  'phpmailer/phpmailer/src/SMTP.php';

class email extends Controller
{
    private $from_name;
    private $address;
    private $asunto;
    private $body;

    public function __construct($from_name, $address, $asunto, $body)
    {
        $this->from_name = $from_name;
        $this->address = $address;
        $this->asunto = $asunto;
        $this->body = $body;

        $this->send();
    }

    public function send()
    {
        require 'vendor/autoload.php';
        //Load Composer's autoloader
        require 'vendor/autoload.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'stivenjhojan011@gmail.com';                     //SMTP username
            $mail->Password   = constant('MAIL-PASSWORD');                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom(constant('MAIL-FROM'), "ICHIRAKU RAMEN");
            $mail->addAddress($this->address, $this->from_name);     //Add a recipient

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content

            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $this->asunto;
            $mail->Body    = $this->body;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'El mensaje ha sido enviado';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
