<?php

	/*
		Check out
			http://w3schools.com/php/php_mail.asp
			http://w3schools.com/php/php_secure_mail.asp
	*/

	$to = "username@kent.edu";
	$subject = "Test mail";
	$message = "You received a message sent from PHP!";
	$from = "username@kent.edu";
	$headers = "From:" . $from;

	if (mail($to,$subject,$message,$headers))
		echo "Mail Sent.";

?>