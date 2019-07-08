<?php

// Create connection
$conn = new mysqli("localhost", "teja", "tejas123", "pratu");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connection OK!";


$result = $conn->query("select * FROM register");
echo "Number of rows:$result->num_rows";

$result->close();
$conn->close();

?>
