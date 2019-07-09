<?php
echo"hello";
$conn=new mysqli("localhost","krutika","krutika123","mydb");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);

}
echo"Connection OK!";

//$result=$conn->query("select count(*) FROM student");
echo "Test"

$result->close();
$conn->close();
?>
