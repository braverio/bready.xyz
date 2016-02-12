<?php
$from = $_POST["from"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$message = "Message from $from ($email):\n\n" . $message;
$location = "Location: http://bready.xyz/contact/index.php?text=";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    mail ("peteryang1625+bready@gmail.com", $subject, $message);
        header($location . "Sent!");
}
else{
    header($location . "Please enter a valid email address");
}
?>