<?php
$servername = "localhost";
$username = "root";
$password = null;
$db = "redplanet";

// Create connection
$conn = new mysqli($servername, $username, $password, $db) or die("Connect failed: %s\n". $conn -> error);

$conn->set_charset("utf8");

?>