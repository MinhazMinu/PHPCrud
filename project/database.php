<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "loginfo";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Error");
}
