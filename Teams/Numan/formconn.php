<?php
$dbhost = "localhost";
$dbuser =  "numan";
$dppass = "numan1998";
$dbname = "phpmyadmin";
$conn = mysqli_connect ($dbhost,$dbuser,$dppass,$dbname) or die();


$a  = $_POST['sr'];
$b  = $_POST['fname'];
$c  = $_POST['lname'];
$d  = $_POST['pwd'];





$ra = mysqli_query($conn, "INSERT INTO FormTable(SrNo,Name,LastNmae,Password) values('$a','$b','$c','$d')") or die (mysqli_error($conn));


$mo = mysqli_query();


mysqli_close($conn);
echo "submitted";

 ?>
