<?php
if (isset($_POST['send'])) {
	$to = 'centarzanshin@gmail.com';
	$subject = 'Chakra Vinyasa';
	$msg = 'Name: ' . $_POST['firstName'] . "\r\n\r\n";
	$msg .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	$msg .= 'Phone: ' . $_POST['phone'] . "\r\n\r\n";
	$msg .= 'Message: ' . $_POST['message'] . "\r\n\r\n";
	$msg .= 'Experience: ' . $_POST['experience'] . "\r\n\r\n";
	$headers ="From: " . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] ."\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	if (mail($to, $subject, $msg, $headers)) {
		echo("<p>Email successfully sent!</p>");
		header( 'Location: http://yogazanshinpula.hr/2018_chakra_vinyasa_en.html' );
		exit;
	 } else {
	 echo("<p>Email delivery failed. We are working on this. In the meantime, please email us directly on info@yogazanshinpula.hr</p>");
	 }
}
?>
