<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "crm2";
$con = mysqli_connect($server, $username, $password, $db);
if (!$con) {
    echo "connection failed";
    die("connection failed to db due to" . mysqli_connect_error());
}
