<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$errors = "";



$email = $_POST["email"];
$monto = $_POST["valor"];
$phoneNumber = $_POST['phoneNumber'];

$emailNuevo = str_replace("@","%40",$email);



$mail = new PHPMailer(true);    
                       // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'a2plcpnl0465.prod.iad2.secureserver.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '​ecuadortreasure@pilisimas.com';                 // SMTP username
    $mail->Password = '​Estaeslacontrasena1';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ecuadortreasure@pilisimas.com', 'Ecuador Treasure');
    $mail->addAddress('info@ecuadortreasure.com', 'Ecuador Treasure');     // Add a recipient
    $mail->addAddress($email);     // Add a recipient
    $mail->addReplyTo('info@ecuadortreasure.com', 'Information');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'We got your tour request';
    $mail->Body    = 'Hey, just wanted to let you know we got your tour request. If you completed the payment we will send you a confirmation shortly. Otherwise, we will call you back to arrange details for the tour. Your contact details are as follow:<br> Email: '.$email.' Phone Number: '.$phoneNumber.'<br>
    <h4>Paga Ahora</h4>
    <form name="PayBox" id="PayBox">
    <!--Email de la cuenta XChange -->
    <input type="hidden" name="remail" value="info@ecuadortreasure.com">
    <!--Email del usuario que realiza el pago-->
    <input type="hidden" name="sendmail" value="'.$email.'">
    <!--Ejemplo: 100.00, 10.00, 1.00-->
    <input type="hidden" name="amount" value="'.$monto.'">
<button onclick="submitPayBox()" id="pay"></button>
</form>';

    $mail->send();
    //echo '<script>alert("Email enviado con Exito");</script>';
    //header("Location: index.php");
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

//header("location:".$url);
?>



