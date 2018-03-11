<?php
$name=$_POST['name'];
$email = $_POST['email'];
$comments = $_POST['message'];

$to = 'bagiyoni@gmail.com';
$message = "$name wrote: $comments";
$headers = "From: $email";

mail($to,'bagiSoftware', $message, $headers);

print 'The message sent successfully'; 