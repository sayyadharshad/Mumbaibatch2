<?php
session_start();

include 'databaseconnection.php';

$username=$_REQUEST['email'];
$password=$_REQUEST['password'];
$firstname=$_REQUEST['fname'];
$lastname=$_REQUEST['lname'];
$contry=$_REQUEST['Country'];
$state=$_REQUEST['State'];
$city=$_REQUEST['City'];
$date=$_REQUEST['birth'];
$birth= date ('Y-m-d H:i:s', strtotime ($date));


$result=mysqli_query($db_connect,"INSERT INTO register(firstname,lastname,username,password,contry,state,city,birth)
values('$firstname','$lastname','$username','$password','$contry','$state','$city','$birth') ");
// $num=mysqli_num_rows($result);
//
// if($num == 1){
  header('location:/IGC/Rsuccesful.html');
// }
// else {
//   header('location:/IGC/signup.html');
// }




 ?>
