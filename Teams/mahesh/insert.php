<?php
$servername = "localhost";
$username = "teja";
$password = "tejas123";
$dbname = "pratu";
$d=$_REQUEST['id'];
$a=$_REQUEST['name'];
$b=$_REQUEST['lname'];
// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname)or die;
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$sql ="INSERT INTO test (id,name,lname)VALUES ('$d','$a','$b')";


 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }

$conn->close();
?>
