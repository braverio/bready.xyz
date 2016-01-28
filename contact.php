<?php
$from = $_POST["from"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$message = "Message from $from ($email):\n\n" . $message;
mail ("peteryang1625+bready@gmail.com", $subject, $message);
header('Location: https://bready.xyz');
?>