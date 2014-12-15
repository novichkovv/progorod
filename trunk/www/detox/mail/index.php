<?php
$to  = "novichkovv@bk.ru" ;
//$to .= "Евгений &lt;enov300@gmail.com>";

$subject = "Birthday Reminders for August";
require_once('mail' . DIRECTORY_SEPARATOR . 'index.php');
//$message = file_get_contents('mail/index.html');

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: multipart/alternative; boundary=spravkaweb-1234' . "\r\n";
$headers .= 'To: <novichkovv@bk.ru>' . "\r\n";
$headers .= "From: 21 Days Detox <info@lonty.ru>\r\n";

echo mail($to, $subject, $message, $headers);
?>