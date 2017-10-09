<?php
	$to = 'luhar86@gmail.com'; // Replace with your email	
	$subject = 'Message from RateClarity'; // Replace with your $subject
	
	$message = 'Name: ' . $_POST['name'] . "\n" .
	           'E-mail: ' . $_POST['email'] . "\n" .
	           'Subject: ' . $_POST['subject'] . "\n" .
	           'Message: ' . $_POST['message'];
	
	mail($to, $subject, $message);
?>
