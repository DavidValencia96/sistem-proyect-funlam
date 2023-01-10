<?php
include_once '../modelo/Usuario.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

$usuario = new Usuario();
if($_POST['funcion']=='verificar'){
    $email = $_POST['email'];
    $user = $_POST['user'];
    $usuario->verificar($email,$user);
}
if($_POST['funcion']=='recuperar'){
    $email = $_POST['email'];
    $user = $_POST['user'];
    $codigo = generar(10);
    $usuario->reemplazar($codigo,$email,$user);
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp-mail.outlook.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'juanda.vid1996@hotmail.com';                     // SMTP username
        $mail->Password   = '1017237749David';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('juanda.vid1996@hotmail.com', 'Equipo Administrativo Ingeniería');
        $mail->addAddress($email);     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Restablecer contraseña ';
        $mail->Body    = '  Reciba un cordial saludo, <br><br>
                            Se solicito una nueva contraseña para el usuario: "<b>'.$user.'</b>", el sistema genero una nueva contraseña: "<b>'.$codigo.'</b>". <br><br> Recuerde cambiar su contraseña una vez entre al sistema de <b>Información de Extensión y Servicios a la Comunidad
                            Universidad Católica Luis Amigó</b>. <br><br><br> Atentamente, <br><br> Equipo de soporte técnico.';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->SMTPDebug = false;//con esto evitamos que nos muestre el codigo en consola y debug
        $mail->do_debug=false;
        $mail->send();
        echo 'enviado';
    } 
    catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

//metodo de generar codigo aleatorio
function generar($longitud){
    $key='';
    $patron='1234567890abcdefghijklmnopqrstuvwxyz-+/*!#$%&'; //carateres que tendra el codigo
    $max=strlen($patron)-1; //con este sabemos cuanto queremos que mida el codigo
    for($i=0;$i<$longitud;$i++){
        $key.=$patron{mt_rand(0,$max)};
    }
    return $key;
}

?>