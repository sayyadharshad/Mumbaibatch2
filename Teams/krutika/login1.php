<?php
$servername = "localhost";
$username = "krutika";
$password = "krutika123";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  email, password FROM username";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "email: " . $row["email"]. "password " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
