<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail=new PHPMailer(true);

$alert = '';

if(isset($_POST["send"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->SMTPAuth=true;
        $mail->Username ='mail.form.onus@gmail.com';
        $mail->Password ='jlbfgruqzplgfnda';
        $mail->SMTPSecure='tls';
        $mail->Port=587;

        $mail->setFrom('mail.form.onus@gmail.com');
        $mail->addAddress('animikhdasofficial@gmail.com');
        
        $mail->isHTML(true);
        $mail->Subject = 'Message Received from Contact:'.$name;
        $mail->Body = "Name : $name <br>Email : $email <br>Subject : $subject <br>Message : $message";

        $mail->send();
        echo"

        <script>
        
        alert('Sent Successfully');
        document.location.href = 'lol.php';
        </script>
        ";
    }catch(Exception $e){

    }
?>