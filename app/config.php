<?php
$host = "localhost";
$user = "root";
$password = "password";
$dbname = "devopsdb";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Database connection failed");
}
?>
