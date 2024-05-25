<?php
//Import PHPMailer classes into the global namespace

//These must be at the top of your script, not inside a function
$n=$_POST["name"];
$e=$_POST["email"];
$m=$_POST["message"];
//require 'vendor/autoload.php';
require "mailer/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST["send"])){


    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();  
    $mail->SMTPAuth   = True;                                           //Send using SMTP
   $mail->Host       = "smtp.elasticemail.com";                                 //Set the SMTP server to send through
        $mail->SMTPSecure = "none";            //Enable implicit TLS encryption
   $mail->Port       = 2525;                                 //Enable SMTP authentication
    $mail->Username   = "";                           //SMTP username
   $mail->Password   = '';                        //SMTP password
                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
   $mail->setFrom($e,$n);
   
   $mail->addAddress("naz889888@gmail.com");
   $mail->Subject ="msage";
   $mail->Body=$m;

   $mail->send();
  // PHPMailer::ENCRYPTION_SMTPS;
     //Content format
     $mail->isHTML(true);        //Set email format to HTML
     $mail->CharSet = "UTF-8"; 
    
     header("Location: index.html", true );
echo "thank you";

}
else echo "wromge";
 

?>

