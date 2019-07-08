<?php

// Create connection
$con = new mysqli("localhost", "rachna", "Chana@123","CHANA");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
else {
  echo "Connection successful";
}
$ID=$_POST["id"];
$UserName=$_POST["name"];
$Email=$_POST["email"];
$Password=$_POST["password"];
$sql = "INSERT INTO REG  VALUES('$ID','$UserName','$Email','$Password')";
if($con->query($sql) == TRUE)
{
  echo "New record created successfully";
}
else {
  echo "Error:" . $sql . "<br>" . $con->error;
}
?>
