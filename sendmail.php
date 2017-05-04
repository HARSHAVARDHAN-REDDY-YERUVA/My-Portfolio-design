<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$sub = $_POST["subject"];
	$body = $_POST["message"];
	$to = "harshavardhan.y@yahoo.com";
	$headers = "You have received a new message from the user $name.\n";
	mail($to,$sub,$body,$headers);
?>