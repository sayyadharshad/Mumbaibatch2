<?php
$servername = "localhost";
$username = "Ali";
$password = "12345";

// Create connection
$conn = new mysqli($localhost, $Ali, $12345);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
