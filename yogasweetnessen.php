<?php
if (isset($_POST['send'])) {
	$to = 'centarzanshin@gmail.com';
	$subject = 'Yoga Sweetness 26.12.2017.';
	$msg = 'Name: ' . $_POST['firstName'] . "\r\n\r\n";
	$msg .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	$headers ="From: info@yogazanshinpula.hr\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	if (mail($to, $subject, $msg, $headers)) {
		echo("<p>Email successfully sent!</p>");
		header( 'Location: https://yogazanshinpula.hr/yogasweetnessen.html' );
		exit;
	 } else {
	 echo("<p>Email delivery failed. Please try again!</p>");
	 }
}
?>
