<?php   

if(isset($_POST['send'])) {


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POSt['message'];
$formContent = "From:  $name \n "Message:  $message";
$recipient = "wizlon00@hotmail.co.uk";
$subject = "Contact Form";
$mailHeader = "From: $email \r\n";
mail($recipient, $subject, $formContent, $mailHeader) or die;
echo "Thank-you";
}