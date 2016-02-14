<?php
session_start();
$from = $_POST["from"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$message = "Message from $from ($email):\n\n" . $message;
$location = "Location: http://bready.xyz/contact/index.php?text=";
if (!isset($_SESSION['hash']) || !isset($_POST['token']) || $_SESSION['hash'] != $_POST['token']) {
	header($location . "An error occured");
} else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    mail ("peteryang1625+bready@gmail.com", $subject, $message);
    header($location . "Sent!");
} 
else{
    header($location . "Please enter a valid email address");
}
?>
