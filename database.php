<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "pogipoako";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die(mysqli_error($con));
}

?>
