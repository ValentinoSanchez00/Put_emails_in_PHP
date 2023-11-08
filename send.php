<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';


if (isset($_POST["send"])) {
   $mail= new PHPMailer(true);
   
   $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
   $mail->Username= 'sanchezravertavalentino@gmail.com';
   $mail->Password='gmbdqmxqikedjylm';
   $mail->SMTPSecure='ssl';
   $mail->Port=465;
   $mail->setFrom('sanchezravertavalentino@gmail.com');
   $mail->addAddress($_POST["email"]);
   $mail->isHTML(true);
   $mail->Subject = $_POST["subjet"];
   $mail->Body= $_POST["message"];
   $mail->send();
   echo "
       
<script>
alert('correo enviado');
document.location.href= 'index.php';
</script>



";
   
   
}

?>
