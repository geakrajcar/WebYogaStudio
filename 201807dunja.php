
<?php
require_once "Mail.php";
$from = $_POST['email'];
$to = "info@yogazanshinpula.hr";
$subject = "2018_Dunja Jocic";
$body = 'Name: ' . $_POST['firstName'] . "\r\n\r\n";
$body .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
$body .= 'Phone: ' . $_POST['phone'] . "\r\n\r\n";
$body .= 'Message: ' . $_POST['message'] . "\r\n\r\n";
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
  echo("<p>" . $mail->getMessage() . "</p> <p>There was an error. Please contact us directly on info@yogazanshinpula.hr until we fix this. </p>");
 } else {
  echo("<br> <br> <center><p>We received your message and will get in touch soon. <br> <a href='https://yogazanshinpula.hr/201807dunjajocic.html'>Back to website</a>  </p><center>");
 }
?>
