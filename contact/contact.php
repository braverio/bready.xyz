<?php
session_start();
$from = $_POST["from"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$message = "Message from $from ($email):\n\n" . $message;
$location = "Location: http://bready.xyz/contact/index.php?text=";

// Check if the token was submitted, and if the session has the token.
if (empty($_SESSION['token']) || empty($_POST['token'])) {
	header($location . "An error occured");
	exit();
}

if ($_SESSION['token'] != $_POST['token']) {
	header($location . "An error occured");
} else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$_SESSION['token'] = ""; // Invalidate token.
    mail ("peteryang1625+bready@gmail.com", $subject, $message);
    header($location . "Sent!");
} 
else{
    header($location . "Please enter a valid email address");
}
?>
