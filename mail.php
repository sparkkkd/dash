<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'tech@dashstudio.ru'; 
$mail->Password = 'nufwrduxajgjqxlp'; 
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
// $mail->SMTPKeepAlive = true;

$mail->setFrom('tech@dashstudio.ru'); 
$mail->addAddress('mail@dashstudio.ru');

$mail->Subject = 'dash studio';

$body = "Пользователь: " . $name . " оставил заявку. Его почта: " . $email . ". Номер телефона: " . $phone;

$mail->msgHTML($body);
// $mail->send();

// $mail->clearAddresses();
// $mail->addAddress("sparkereddd@gmail.com");
// $bodyAdmin = "Пользователь: " . $name . " оставил заявку. Его почта: " . $email . ". Номер телефона: " . $phone;
// $mail->msgHTML($bodyAdmin);
// $mail->send();

if(!$mail->send()) {
    echo 'Error';
} else {
    // header('location: thank-you.html');
    echo 'Success';
}

?>