<?php
$servername = "127.0.0.1:3307";
$username = "root";  // Change to your database username
$password = "";  // Change to your database password
$dbname = "greenhut";  // Change to your database name

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
