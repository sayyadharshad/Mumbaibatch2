<?php
  $link= mysqli_connect("localhost","sonu","sonu123");
  $database= mysqli_select_db($link,"game");
  $username=$_POST["email"];
  $pass=$_POST["psv"];

  $query = "select * from userdetail where email ='$username' and psv = '$pass'";

  $result =mysqli_query($link,$query);

  if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION["username"] = $username;
    header("Location:proj2.php");
  }
  else{
    echo "<script>alert('neem ka patta kadva hai ...');
      window.location.href='loginh.html';
    </script>";
  }
  ?>
