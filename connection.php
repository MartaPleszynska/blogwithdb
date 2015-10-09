<?php
$servername = "dynamic-mjpblog.rhcloud.com";
$username = "admintuB1xCe";
$password = "z6_DEFwzFGQj";
$database = "dynamic";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$mysql_host = getenv("OPENSHIFT_MYSQL_DB_HOST");
?>
