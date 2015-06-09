<?php 
 
$name = $_GET["name"];
$email = $_GET["email"];
$phone = $_GET["phone"];
$subject = $_GET["subject"];
$message = $_GET["message"];
//$array = ['name' => $name, 'email'=> $email, 'phone' => $phone, 'subject' => $subject, 'message' => $message];
//echo "$name, $email, $phone, $subject, $message";
//print_r($array);
foreach($_POST as $key => $value){
	switch ($key) {
		case 'name':
			if(preg_match("/^[a-zA-Z0-9]{2,}$/", $_GET['name'])!= 1){
				print('input name error');
				break;
			}
			print("checking name : $_GET[name]");
			break;
		case 'email':
			if(preg_match(!filter_var($email), $_GET['email'])){
				print('input email error');
				break;
			}
			print("checking email : $_GET[email]");
			break;
		case 'phone':
			if(preg_match('\(?[2-9][0-8][0-9]\)?[-. ]?[0-9]{3}[-. ]?[0-9]{4}', $_GET['phone']) != 1){
			print('incorrect phone input');
			break;
			}
			print("checking phone : $_GET[phone]");
			print('<br/>');
			break;
		case 'subject':
			break;
		case 'message':
			break;
		default:
			break;
	}
}

 ?>
