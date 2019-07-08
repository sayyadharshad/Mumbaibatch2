<?php
$servername = "localhost";
$username = "pratiksha";
$password = "Pari@123";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " l $conn->connelaerror);
}
else {
       echo " connection successfully";
  }
/*
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];

$sql = "INSERT INTO test1 (firstname, lastname)
VALUES ('$fname', '$lname')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$conn->close();
?>
