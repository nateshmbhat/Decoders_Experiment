<?php
require_once('mailConfiguration.php');
$body = generateBody();
$email = array('nishank127@gmail.com','rockrohan34@gmail.com');
$subject = "Registration Successfull";
$mail = configureNewMail($subject,$body);
if(sendMail($email,$mail))
  header('Location:success.php');
else
  echo 'Mail not sent';
 ?>
