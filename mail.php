<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$content="From: $name \n Email: $email \n Phone: $phone \n Message: $message";
$recipient = "taesly@webdevtaesly.com";
$mailheader = "From: $email \r\n";
mail($recipient, $phone, $content, $mailheader) or die("Error!");

header( 'Location: https://www.webdevtaesly.com/' ) ;

?>

