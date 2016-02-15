<?php
require_once "../common.php";

$db = get_db();

$rid = $db->real_escape_string($_GET['rid']);
$number = $db->real_escape_string($_GET['number']);
$token = $db->real_escape_string($_GET['token']);

$table = $tbls['reservations'];

$sql = "UPDATE $table SET confirmed=1 WHERE rid='$rid' AND number='$number' AND token='$token'";

error_log($sql);
    
$db->query($sql);

if($db->error){
    echo('Your reservation was not found!');
}else{
    header("Location: https://bready.xyz");
}

$db->close();

?>
