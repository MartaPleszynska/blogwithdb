<?php
$servername = "192.168.20.56";
$username = "root";
$password = "";
$database = "mjpblog";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
?>
