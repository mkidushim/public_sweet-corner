<?php 
 
$name = $_GET["name"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$subject = $_GET["subject"];
$message = $_GET["message"];
//$array = ['name' => $name, 'email'=> $email, 'phone' => $phone, 'subject' => $subject, 'message' => $message];

//print_r($array);
foreach($_post as $key => $value){
	switch ($key) {
		case 'first_name':
			if(preg_match(^[A-Z][a-zA-Z]+$, $_post['first_name']))
			break;
		case 'last_name':
			if(preg_match(pattern, subject))
			break;
		case 'first_name':
			if(preg_match(pattern, subject))
			break;
		case 'first_name':
			if(preg_match(pattern, subject))
			break;
		case 'first_name':
			if(preg_match(pattern, subject))
			break;
		default:
			# code...
			break;
	}
}
 ?>}
