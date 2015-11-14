
<?php ini_set('display_errors', '1');

$to = 'David Powers <david@davidemail.com>, anther@example.com';
$subject = 'Subject of email';
$body = 'Thisi is the body of the email message';

//optional below
$headers = "From: webmaster@example.com\r\n";
$headers .= "Content-type: text/plain; charset=utf-8\r\n";
$headers .= "Cc: myfriend@email.com";

$success = mail($to, $subject, $body $headers, '-fmyemail@address.com');

?>