<?php
session_start();
if (empty($_SESSION['token'])) {
	$_SESSION['token'] = md5(mt_rand(1,1000000));
}
include "../header.php"; ?>
<div class="form-container">
        <h1>Contact us</h1><br>
        <p>If you have any questions, comments, or concerns, please feel free to use the contact form below. However, if you are looking to make a reservation at our restaurant, use the <a href="/reservations/">reservations form</a> instead.</p>
        <p>If you would prefer to make a call, you can reach us at 714.555.2732 during our operating hours: Mon. to Sat. 7AM - 9 PM and Sun. 8AM to 6PM</p>
        <form action="contact.php" method="POST">
			<input type="hidden" name="token" value="<?php print $_SESSION['token']; ?>" />
            <h2>Your Name</h2><input type="text" name="from"><br><br>
            <h2>Your Email</h2><input type="text" name="email"><br><br>
            <h2>Subject</h2><input type="text" name="subject"><br><br>
            <h2>Message</h2><textarea name="message" rows="6"></textarea><br><br>
            <input type="submit" value="Submit" class="button">
        </form>
        </div>
<?php include "../footer.php"; ?>
