<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "inaam_kabbara@hotmail.com";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
    
    $email_body = "Full Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message";
    
    if(mail($to, $subject, $email_body, $headers)){
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Email not sent. Please try again later.";
    }
}
?>
