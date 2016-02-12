<?php

$db = get_db();

$number = $db->real_escape_string(randomStr(7,"0123456789");
$name = $db->real_escape_string($_POST['name']);
$email = $db->real_escape_string($_POST['email']);
$phone = $db->real_escape_string($_POST['phone']);
$amt = $db->real_escape_string($_POST['guests']);
$time = $db->real_escape_string($_POST['time_process']);
$token = $db->real_escape_string(randomStr());

$table = $tbls['reservations'];
$sql = "INSERT INTO $table (number,name,email,phone,guests,time,token) VALUES ($number,$name,$email,$phone,$amt,$time,$token)";

$db->query();

$rid = $db->insert_id();

mail($email,"Confirm your reservation","Reservation number $number: \nhttps://bready.xyz/reservations/confirm.php?rid=$rid&number=$number&token=$token");

$db->close();

header("Location: https://bready.xyz");
?>