<?php
// include 'login.php';

$db_host="localhost";
$db_username="sid";
$db_password="123";
$db_name="igc";

$db_connect=mysqli_connect($db_host,$db_username,$db_password,$db_name) or die();

if (mysqli_connect_error())
{
  echo "failed to connect to mysql:".mysqli_connect_error();

}
// echo "connection succesful";

 ?>
