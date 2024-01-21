<?php
$to      = 'kontakt@olsenpak.pl';
$subject = $_POST['email'];
$message = $_POST['message'];
$headers = 'From: '.$_POST['name']. "\r\n". 'Content-type: text/html; charset=utf-8';

mail($to, $subject, $message, $headers);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="refresh" content="5; url=../index.html" />
</head>
<body>
	<h1>Otrzymaliśmy Twój email. Wkrótce się skontaktujemy!</h1>
	<h3>Trwa przekierowanie...</h3>
</body>
</html>