<?php
session_start();


include 'databaseconnection.php';


// $firstname=$_REQUEST[];
// $lastname=$_REQUEST[];
// $contry=$_REQUEST[];
// $state=$_REQUEST[];
// $city=$_REQUEST[];
// $birth=$_REQUEST[];
if(isset($_REQUEST['submit'])){
  $username=$_REQUEST['username'];
  $password=$_REQUEST['password'];
  // $fname=$_REQUEST['fname'];



$res=mysqli_query($db_connect,"select * from register where username='$username' and password='$password'");
$res2=mysqli_query($db_connect,"select firstname from register where username='$username' and password='$password'");
// header('location:/IGC/login.html');
$row = mysqli_fetch_assoc($res);

$num=mysqli_num_rows($res);

if($num == 1){
  echo "login succesful";
  $_SESSION['username']=$row['firstname'];
  header('location:/IGC/index.php');
}
else {
  echo "<script type='text/javascript'>alert('please fill write details!')</script>";
  header('location:/IGC/login.html');

  }
}


 ?>
