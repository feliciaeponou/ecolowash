<?php
$servername = "localhost";
$database = "ecolowash";
$username = "root";
$password = "";
$datepost = date("d-m-Y");
$ip = $_SERVER['REMOTE_ADDR'];
$domain = $_SERVER['SERVER_NAME'];
$browser = $_SERVER['HTTP_USER_AGENT'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//mysqli_close($conn);
?>