<?php

require 'Mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$recipient = $_POST['remail'];
$subject = $_POST['subject'];
$messege = $_POST['messege'];


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'seminarhallbs@gmail.com';                 // SMTP username
$mail->Password = 'bookmefast';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('seminarhallbs@gmail.com', 'Team, SeminarHallBookingSystem');
//$mail->addAddress($recipient);     // Add a recipient
$mail->addAddress('15ce073@charusat.edu.in');		// Add a recipient
$mail->addAddress('15ce048@charusat.edu.in');		// Add a recipient
$mail->addAddress('15ce040@charusat.edu.in');		// Add a recipient


//$mail->Subject = 'First Mail from SMTP php';
//$mail->Body    = 'Jinga LA La <b>in bold!</b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->Subject = $subject;
$mail->Body    = $messege;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>