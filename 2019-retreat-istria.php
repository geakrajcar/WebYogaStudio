
<?php
require_once "Mail.php";
$from = $_POST['email'];
$to = "info@yogazanshinpula.hr";
$subject = "2019 Spring cleaning retreat";
$body = 'Name: ' . $_POST['firstName'] . "\r\n\r\n";
$body .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
$body .= 'Experience: ' . $_POST['experience'] . "\r\n\r\n";
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
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<br> <br> <center><p>Your message is sent! We will get in touch soon.<br> <a href='https://yogazanshinpula.hr/2019-retreat-istria.html'>Back to the site</a>  </p><center>");
 }
?>
