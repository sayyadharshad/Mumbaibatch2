<?php
$servername = "localhost";
$username = "pratiksha";
$password = "Pari@123";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, password FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
     {
        echo "<br> UserName: ". $row["username"]. "<br> Password:" . $row["password"] . "<br>";
     }
}
    else
    {
    echo "0 results";
    }

$conn->close();
?>
