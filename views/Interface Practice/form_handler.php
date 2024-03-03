<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$messsage = $_POST['message'];

$email_from = 'info@website.com';

$email_subject = 'WEBSITE FORM: $name sent a message to you';

$email_body = "User email: $email.\n".
                "Subject: $subject.\n".
                "Message: $message .\n";

$to = 'fionaloy@protonmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>