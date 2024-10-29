<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$name = strip_tags(trim($_POST['name']));
	$email = filter_var(trim($_POST[email]),FILTER_SANITIZE_EMAIL);
	$message = trim($_POST['message']);
	$recipient = $_POST['recipient'];
	$subject = $_POST['subject'];

	if (empty($name) OR empty($email) OR empty($message)) {
		//http_responce_code(400);
		echo "Please Check Your Form Fields";
		exit;	
	}

	$message = "Nane : $name\n";
	$message .= "Email : $email\n\n";
	$message .= "Message : \n$message\n";

	$headers = "From : $name <$email>";

	if (mail($recipient, $subject, $message, $headers)) {
		//http_responce_code(200);
		echo "Thank You, Your Message Has Been Sent";
	} else {
		//http_responce_code(500);
		echo "Error : There was problem sending your message";
	}
} else {
	//http_responce_code(403);
	echo "Their was a problem with your submission, please try again";
}
?>