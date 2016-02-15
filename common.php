<?php
require_once "config.php";
$rt = $_SERVER['DOCUMENT_ROOT'] . "/";

function get_db(){
    global $dbhost, $dbuser, $dbpass, $dbname;
    return new mysqli($dbhost, $dbuser, $dbpass, $dbname);
}

function randomStr($length = 20,$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'){
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
