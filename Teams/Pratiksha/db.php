<?php
$dbhost="localhost";
$dbuser="teja";
$dbpass="tejas123";
$dbname="pratiksha";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die();

$a=$_REQUEST['fname'];
$b=$_REQUEST['lname'];
$c=$_REQUEST['MNum'];
$d=$_REQUEST['email'];
$e=$_REQUEST['pass'];
$f=$_REQUEST['gender'];

$ka=mysqli_query($conn,"INSERT INTO register(fname,lname,mobno,email,passwd,gender) values('$a','$b','$c','$d','$e','$f')") or die(mysqli_error($conn));
mysqli_close($conn);
echo "Data Inserted successfully";


 ?>
