<?php
if (isset($_POST['send'])) {
	$to = 'centarzanshin@gmail.com';
	$subject = 'Zanshin za Dinu';
	$msg = 'Name: ' . $_POST['firstName'] . "\r\n\r\n";
	$msg .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
	$msg .= 'Phone: ' . $_POST['tel'] . "\r\n\r\n";

	if(isset($_POST['sub1']) && $_POST['sub1'] == 'Subota 9:00 ABC Yoga za pocetnike - Suzi')
	{
		$msg .= 'Registration: ' . $_POST['sub1'] . "\r\n\r\n";
	}
	if(isset($_POST['sub2']) && $_POST['sub2'] == 'Subota 10:30 Easy Flow - Suzi')
	{
		$msg .= 'Registration: ' . $_POST['sub2'] . "\r\n\r\n";
	}
	if(isset($_POST['sub3']) && $_POST['sub3'] == 'Subota 18:00 Yoga - Jasna')
	{
		$msg .= 'Registration: ' . $_POST['sub3'] . "\r\n\r\n";
	}
	if(isset($_POST['sub4']) && $_POST['sub4'] == 'Subota 19:30 Yoga Nidra - Jasna')
	{
		$msg .= 'Registration: ' . $_POST['sub4'] . "\r\n\r\n";
	}
	if(isset($_POST['ned1']) && $_POST['ned1'] == 'Nedjelja 9:00 Yoga - Tanja T.')
	{
		$msg .= 'Registration: ' . $_POST['ned1'] . "\r\n\r\n";
	}
	if(isset($_POST['ned2']) && $_POST['ned2'] == 'Nedjelja 10:30 ABC Yoga za pocetnike - Melani')
	{
		$msg .= 'Registration: ' . $_POST['ned2'] . "\r\n\r\n";
	}
	if(isset($_POST['ned3']) && $_POST['ned3'] == 'Nedjelja 18:00 Yoga - Tanja T.')
	{
		$msg .= 'Registration: ' . $_POST['ned3'] . "\r\n\r\n";
	}
	if(isset($_POST['ned4']) && $_POST['ned4'] == 'Nedjelja 19:30 Yin Yoga - Suzi')
	{
		$msg .= 'Registration: ' . $_POST['ned4'] . "\r\n\r\n";
	}
	if(isset($_POST['mas1']) && $_POST['mas1'] == 'Abdominalna Masaza - Suzi')
	{
		$msg .= 'Registration: ' . $_POST['mas1'] . "\r\n\r\n";
	}
	if(isset($_POST['mas2']) && $_POST['mas2'] == 'Masaza psoasa - Melani')
	{
		$msg .= 'Registration: ' . $_POST['mas2'] . "\r\n\r\n";
	}
	if(isset($_POST['mas3']) && $_POST['mas3'] == 'Masaza Thai akupresura - Melani')
	{
		$msg .= 'Registration: ' . $_POST['mas3'] . "\r\n\r\n";
	}
	if(isset($_POST['mas4']) && $_POST['mas4'] == 'Thai masaza - Vili')
	{
		$msg .= 'Registration: ' . $_POST['mas4'] . "\r\n\r\n";
	}


	$headers ="From: info@yogazanshinpula.hr\r\n";
	$headers .= 'Content-Type: text/plain; charset=utf-8';
	if (mail($to, $subject, $msg, $headers)) {
		echo("<p>Email successfully sent!</p>");
		header( 'Location: http://yogazanshinpula.hr/201802dina.html' );
		exit;
	 } else {
	 echo("<p>Email delivery failed. Please try again!</p>");
	 }
}
?>
