<html>
<head>
<title>PHPMailer - SMTP basic test with authentication</title>
</head>
<body>

<?php

//error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('Europe/Madrid');

require_once('../class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.ingenieriaeinnovacion.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.ingenieriaeinnovacion.com"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "javierce@ingenieriaeinnovacion.com"; // SMTP account username
$mail->Password   = "imasd"; // SMTP account password

$mail->SetFrom('javierce@ingenieriaeinnovacion.com', 'Javier Cejudo');

$mail->AddReplyTo("javierce@ingenieriaeinnovacion.com","Javier Cejudo");

$mail->Subject    = "Javi - PHPMailer Test Subject via smtp, basic with authentication";

$mail->AltBody    = "Javi: To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "brujoaverio@hotmail.com";
$mail->AddAddress($address, "Javier Cejudo");

$mail->AddAttachment("../../../../images/vistico_logo.png"); // attachment
$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>

</body>
</html>
