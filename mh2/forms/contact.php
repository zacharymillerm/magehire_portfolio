<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "info@magehire.com";
$subject = $_POST['subject'];
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: Sender" . "\r\n" .
    "CC: info@magehire.com";

if ($email != null) {
    mail($to, $subject, $txt, $headers);
}
