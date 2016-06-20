<?php
require_once("../common.php");

$rid = $_GET['rid'];
$number = $_GET['number'];
$token = $_GET['token'];

$db = get_db();

$tbl = $tbls['reservations'];

$sql = "SELECT * FROM $tbl WHERE rid='$rid' AND number='$number' AND token='$token'";

$result = $db->query($sql);

$data = $result->fetch_assoc();

$name = $data['name'];
$email = $data['email'];
$phone = $data['phone'];
$guests = $data['guests'];
$raw_time = $data['time'];

$d = new DateTime($raw_time);
$time = $d->format('F n, o \a\t g:iA');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<head></head>
<body style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<style type="text/css">
.buttons:after {
visibility: hidden; display: block; font-size: 0; content: " "; clear: both; height: 0;
}
.confirm:hover {
background: #6483b3;
}
.cancel:hover {
background: #6483b3;
}
</style>
<div class="container" style="vertical-align: baseline; box-sizing: border-box; color: #222; margin: 0px; padding: 0px; border: 0px none; font: 2vh 'Roboto','Helvetica','Arial', sans-serif;">
<!--
    $number (id)
    $name
    $email
    $phone
    $guests
    $time
-->
    <div class="header" style="font-size: 2em; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: center; background: #edbc64; margin: 0px; padding: 1em; border: 0px none;" align="center">
        Bready Reservation #<?php echo $number;?>
    </div>
    <div class="body" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 2em; border: 0px none;">
        <p style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">Hello Valued Customer!<br style="box-sizing: border-box;"><br style="box-sizing: border-box;">You have recently made a reservation with us. Please verify the follow details and click on the confirmation link. If you did not make a reservation with us or would like to cancel your reservation, please click on the cancellation link below.</p>
        <div class="data" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
            <table style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; word-break: break-all; margin: auto; padding: 1em 0em; border: 0px none;">
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Reservation ID</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline">#<?php echo $number;?></td>
                </tr>
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Name</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline"><?php echo $name; ?></td>
                </tr>
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Email</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline"><?php echo $email; ?></td>
                </tr>
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Phone</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline"><?php echo $phone; ?></td>
                </tr>
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Party Size</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline"><?php echo $guests . " guests"; ?></td>
                </tr>
<tr style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
<td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: right; margin: 0px; padding: 0px 2em 0px 0px; border: 0px none;" align="right" valign="baseline">Time</td>
                    <td style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;" valign="baseline"><?php echo $time; ?></td>
                </tr>
</table>
</div>
        <div class="buttons" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
            <a href="<?php echo "https://bready.xyz/reservations/confirm.php?rid=$rid&number=$number&token=$token"; ?>" target="_blank" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
                <div class="confirm" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; float: left; width: 45%; color: white; text-align: center; transition: background .25s; cursor: pointer; background: #7398cf; margin: 0px; padding: 1em; border: 0px none;" align="center">
                    Confirm
                </div>
            </a>
            <a href="<?php echo "https://bready.xyz/reservations/cancel.php?rid=$rid&number=$number&token=$token"; ?>" target="_blank" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">
                <div class="cancel" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; float: right; width: 45%; color: white; text-align: center; transition: background .25s; cursor: pointer; background: #7398cf; margin: 0px; padding: 1em; border: 0px none;" align="center">
                    Cancel
                </div>
            </a>
        </div>
        <br style="box-sizing: border-box;"><p style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; clear:both;">If the above buttons do not work, copy and paste or type in exactly the following links into a web browser.</p>
        <br style="box-sizing: border-box;"><p class="word-break" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; word-break: break-all; margin: 0px; padding: 0px; border: 0px none;">
            <span style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">Confirm: </span><?php echo "https://bready.xyz/reservations/confirm.php?rid=$rid&number=$number&token=$token"; ?>
            <br style="box-sizing: border-box;"><br style="box-sizing: border-box;"><span style="font-size: normal; font-style: normal; font-variant: normal; font-weight: bold; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">Cancel: </span><?php echo "https://bready.xyz/reservations/cancel.php?rid=$rid&number=$number&token=$token"; ?>
        </p>
    </div>
    <div class="footer" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: center; margin: 0px; padding: 0px; border: 0px none;" align="center">
        <p style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none;">Thank you for choosing to dine with us!</p>
<br style="box-sizing: border-box;"><div class="img" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; text-align: center; max-width: 80%; margin: 0px auto; padding: 0px; border: 0px none;" align="center">
            <img src="https://bready.xyz/img/logo.jpg" style="font-size: normal; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal; vertical-align: baseline; box-sizing: border-box; width: 100%; margin: 0px; padding: 0px; border: 0px none;">
</div>
    </div>
    <br style="box-sizing: border-box;">
</div>
</body>
</html>