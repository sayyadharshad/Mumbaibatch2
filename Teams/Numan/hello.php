<?php

// Create connection
$conn = new mysqli("localhost", "numan", "numan1998", "numan");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connection OK!";


$result = $conn->query("select * FROM numan");
echo "Number of rows:$result->num_rows";

$result->close();
$conn->close();

?>
