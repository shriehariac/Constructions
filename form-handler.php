<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_form = 'info@easygo.com';

$email_subject = 'New form submission';

$email_body = "user Name: $name.\n".
              "user Email: $visitor_email.\n".
              "suject: $visitor_email.\n"
               "user Message: $visitor_email.\n"

$to = 'shriehariac@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_suject,$email_body,$headers);

header("location: contact.html")


?>