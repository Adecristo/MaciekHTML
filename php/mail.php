<?php
$to      = 'email@email.pl';
$subject = $_POST['email'];
$message = $_POST['message'];
$headers = 'From: '.$_POST['name']. "\r\n". 'Content-type: text/html; charset=utf-8';

mail($to, $subject, $message, $headers);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta http-equiv="refresh" content="0; url=www.olsenpak.pl?" />
</head>
<body>
</body>
</html>