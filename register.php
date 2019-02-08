<?php
if (isset($_POST['send'])) {
	$to = 'centarzanshin@gmail.com';
	$subject = 'Daphne Koken April 2018.';
	$msg = 'Name: ' . $_POST['firstName'] . "\r\n\r\n";
	$msg .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	$msg .= 'Experience: ' . $_POST['experience'] . "\r\n\r\n";
	$headers ="From: " . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] ."\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	if (mail($to, $subject, $msg, $headers)) {
		echo("<p>Email successfully sent!</p>");
		header( 'Location: http://yogazanshinpula.hr/daphnekoken.html' );
		exit;
	 } else {
	 echo("<p>Email delivery failed. Please try again!</p>");
	 }
}
?>
