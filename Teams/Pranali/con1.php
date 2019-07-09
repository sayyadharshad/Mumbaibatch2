<?php
$con = new mysqli("localhost","pranali","pranali123","mydb");
if($con->connect_error){
  die("ERROR unable to connect:".$con->connect_error);
}
echo "connect to the database";
$result=$con->query("select * from student");
echo "Number of rows: $result->num_rows";
$result->close();
$con->close();
?>
