<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@vgu.edu.vn';

$email_subject = "NEW FORM SUBMISSION";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n".
$to = 'june30062001@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitors_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")
?>