<?php
$con=new mysqli("localhost","krutika","krutika123","mydb");
if($con->connect_error){
die("ERROR enable to connect:".$con->connect_error);
}
echo "connect to database";
$result=$con->query("select* from student");
echo ("Number of rows:".$result->num_rows);
$result->close();
$con->close();
?>
