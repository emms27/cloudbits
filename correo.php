<?php 
require("plugins/phpmailer/class.phpmailer.php");
require("plugins/phpmailer/class.smtp.php");

$nombre=$_POST["name"];
$email=$_POST["email"];
$mensaje=$_POST["message"];
$ip = $_SERVER['REMOTE_ADDR'];

$comentario = nl2br( $comentario);
$cuerpo='<html>
<div align=center>
<img src="http://cdbit.net/img/114-cdbit.png" /><br><br>
<p align="left">
<b> A quien corresponda: </b><br>Este mensaje, fue escrito y enviado de forma automática, desde la sección de contacto de cloudbits.org.mx. Ubicado en la página www.cloudbits.org.mx , favor de atender y canalizar este mensaje con el área correspondiente para su pronta respuesta.<br><br><br></p>
<p align="left">
<b>Información del Contacto:</b><br>
Nombre: '.$nombre.'<br>
Correo: '.$email.'<br>
Mensaje: '.$mensaje.'</p>
<div>
<br><HR><br><p><small><div align=justify><em><font color=gray>
La información transmitida en el presente mensaje tiene la intención de estar dirigida únicamente a la persona o entidad que se refiere y puede contener información privilegiada y/o confidencial. Cualquier revisión, retransmisión, diseminación o cualquier uso impropio o relacionado con dicha información por persona alguna distinta a la que fue dirigido este mensaje queda estrictamente prohibida. Si Usted ha recibido este mensaje o sus anexos por error, favor de contactar al remitente y elimine el material de cualquier computadora</font></em></div></small><br><div align=center><small>Copyright © 2015 cloudbits.org.mx</div></p></small>
</html>'; 

// Instanciamos la clase
$mail = new PHPMailer();

try {
//Iniciar la validación por SMTP:
//$mail->IsSmtp();
$mail->Mailer = "smtp";
//$mail->Host = "ssl://mail.suspensionesmexico.com.mx";
$mail->Host = "mail.cdbit.net";
$mail->Port="26";
$mail->SMTPAuth = true;
$mail->Username = 'contacto@cloudbits.org.mx';
$mail->Password = "cdb1t.c0nt4ct0";
$mail->From = $email; // Desde donde enviamos (Para mostrar)
$mail->FromName = "Contacto";
$mail->AddBCC('carreon.emmanuel@gmail.com'); // Esta es la dirección a donde enviamos CCO (con copia oculta)
$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = 'cloudbits.org.mx'; // Este es el titulo del email.
$mail->Body = $cuerpo; // Mensaje a enviar

if(!$mail->Send()) echo "Mailer Error: " . $mail->ErrorInfo; //else  echo "Message sent!";
} catch (phpmailerException $e){
  echo $e->errorMessage(); 
} catch (Exception $e){
  echo $e->getMessage(); 
}

//header('Location: https://www.wpbrclientes.com/clientes/SCP-pedidos/pedido_recibido.html');
?>
