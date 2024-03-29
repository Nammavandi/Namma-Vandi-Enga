<?php
$servername = "localhost:3306";
$username = "bsswebin_bus";
$password = "Bus@Tracker2024";
$dbname = "bsswebin_bus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>