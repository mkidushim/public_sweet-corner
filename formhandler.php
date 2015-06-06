<?php 
 
$name = $_GET["name"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$subject = $_GET["subject"];
$message = $_GET["message"];
$array = ['name' => $name, 'email'=> $email, 'phone' => $phone, 'subject' => $subject, 'message' => $message];

print_r($array);
 ?>