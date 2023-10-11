<?php

$db_server = "localhost";
$db_username= "root";
$db_password = "";
$db_name = "early_notes";
$connect = mysqli_connect($db_server, $db_username,$db_password ,$db_name );
if (!$connect) {
    die('Something went wrong');
}

