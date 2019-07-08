<?php
echo "Reached PHP File";
session_start();
$dbhost="localhost";
$dbuser="teja";
$dbpass="tejas123";
$dbname="pratiksha";

 echo "Trying to connect";
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)or die();
echo "Connection established";

echo "$_POST['singin']";
echo "$_POST['email']";
echo "$_POST['passwd']";


if ( !empty($_POST['email'] && !empty($_POST['passwd'])) {

  $username =$_REQUEST['email'];
  $password =$_REQUEST['passwd'];
  $sql ="select * from register where email = '$username'and passwd ='$password'";
echo $sql;
  $query = mysqli_query($conn,$sql);

  $row = mysqli_num_rows($query);
    if($row == 1){
      echo "login successful";
      $_SESSION['email']=$username;
      header ('location:login.php');

    }else
    echo "login failed";
    header ('location:log.php');
  }
  echo "Ended"
  ?>


























 ?>
