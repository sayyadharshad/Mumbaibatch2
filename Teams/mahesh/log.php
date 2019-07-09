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


//echo "$_POST['singin']";
echo $_POST["email"];
//echo "$_POST['passwd']";
//if  (($_POST["email"])
if (isset($_POST['email']))
 {
echo "Enter in If condition";

  $username =$_POST['email'];
  $password =$_POST['passwd'];

  $sql ="select * from register where email = '$username'and passwd ='$password'";
  echo $sql;
  $query = mysqli_query($conn,$sql);

  $row = mysqli_num_rows($query);
    if($row == 1)
    {
      echo "login successful";
      $_SESSION['email']=$username;
       header ('location:slid.html');

    }

    else
    {
    echo "login failed";
    header ('location:log.php');
  }
}
  echo "Ended"
  ?>
