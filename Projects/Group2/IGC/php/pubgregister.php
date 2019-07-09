
<?php
session_start();

include 'databaseconnection.php';

$player1=$_REQUEST['id1'];
$player2=$_REQUEST['id2'];
$player3=$_REQUEST['id3'];
$player4=$_REQUEST['id4'];
$date=$_REQUEST['date'];
$contactnumber=$_REQUEST['contact-number'];
$emailid=$_REQUEST['Email-id'];
$teamname=$_REQUEST['team-name'];
$acceptrules=$_REQUEST['rules'];
$acceptTc=$_REQUEST['tc'];
$tdate= date ('Y-m-d H:i:s', strtotime ($date));
$username= $_SESSION['username'];




$query=mysqli_query($db_connect,"INSERT INTO pubgregister(PLAYER1USERID,PLAYER2USERID,PLAYER3USERID,PLAYER4USERID,TDATE,contactnumber,emailid,teamname,Acceptrules,Accepttc,username) VALUES(
  $player1,$player2,$player3,$player4,'$tdate',$contactnumber,'$emailid','$teamname','$acceptrules','$acceptTc','$username')") or die(mysqli_error($db_connect));

  mysqli_close($db_connect);

 ?>
