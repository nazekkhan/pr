<?php



if(isset($_POST['send'])){

    require_once 'mail.php';


$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('naz889888@gmail.com');
$mail->Subject ='msage';
$mail->Body=$_POST['message'];
$mail->send();
header("Location: index.html", true );
}
else echo "no";
?>

   