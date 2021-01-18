<?php
$name=$_POST['name'];
$email=$_POST['email'];
$disc=$_POST['disc'];
	

	

	$email_subject="New Querry";

	$email_body="Name: $name.\n".
				"email: $email.\n".
				"disc: $disc.\n";

	$to="parotoshverma23@gmail.com";

	$headers="From: $email\r\n";

	$headers="reply-to: $email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");
?>