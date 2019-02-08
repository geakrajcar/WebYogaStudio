
<?php
require_once "Mail.php";
$from = $_POST['email'];
$to = "info@yogazanshinpula.hr";
$subject = "Registration form";
$body = 'Name: ' . $_POST['firstName'] . "\r\n\r\n";
$body .= 'Birth date: ' . $_POST['birthdate'] . "\r\n\r\n";
$body .= 'Address: ' . $_POST['address'] . "\r\n\r\n";
$body .= 'OIB: ' . $_POST['oib'] . "\r\n\r\n";
$body .= 'Phone: ' . $_POST['phone'] . "\r\n\r\n";
$body .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
$body .= 'Experience: ' . $_POST['experience'] . "\r\n\r\n";
$body .= 'How often do you practice: ' . $_POST['howmuch'] . "\r\n\r\n";
$body .= 'Injuries: ' . $_POST['injury'];
$host = "mail.yogazanshinpula.hr";
$username = "info@yogazanshinpula.hr";
$password = "allchakra108";
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<br> <br> <center><p>Vaša registracija je zaprimljena! <br> <a href='https://yogazanshinpula.hr/abc.html'>Natrag na stranicu</a>  </p><center>");
 }
?>
