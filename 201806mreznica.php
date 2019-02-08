<?php
if (isset($_POST['send'])) {
	$to = 'centarzanshin@gmail.com';
	$subject = '2018/06/Thai Hrvatska - Mreznica';
	$msg = 'Name: ' . $_POST['firstName'] . "\r\n\r\n";
	$msg .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	$msg .= 'Phone: ' . $_POST['phone'] . "\r\n\r\n";
	$msg .= 'Message: ' . $_POST['message'] . "\r\n\r\n";
	$headers ="From: " . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] ."\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	if (mail($to, $subject, $msg, $headers)) {
		echo("<p>Email successfully sent!</p>");
		header( 'Location: http://yogazanshinpula.hr/201806mreznica.html' );
		exit;
	 } else {
	 echo("<p>Email delivery failed. Please try again!</p>");
	 }
}
?>
