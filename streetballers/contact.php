<?php

if(isset($_POST['send'])) {
   // Prepare the email
$to = 'wizlon00@hotmail.co.uk';

$name = $_POST['name'];
$mail_from = $_POST['email'];
$subject = 'Message sent from website';
$message = $_POST['message'];

$header = "From: $name <$mail_from>";

   // Send it
   $sent = mail($to, $subject, $message, $header);
   if($sent) {
      echo '<script language="javascript">';
      echo 'alert("message successfully sent")';
    

   } else {
     echo '<script language="javascript">';

   }

}
?>
