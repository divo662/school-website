<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'divzeh001@gmail.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "Subject: $subject.\n".
                  "Message: $message.\n";

    $to = 'divzeh001@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    if(mail($to, $email_subject, $email_body, $headers)){
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    } else {
        echo "Failed to send email.";
    }
}
