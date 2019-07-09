<?php
  $link=mysqli_connect("localhost","newuser","password");
  $database=mysqli_select_db($link,"mydb");

  $UserEmail=$_POST["email"];
  $Password=$_POST["pass"];

  $query ="select * from signup1 where email='$UserEmail' and pw='$Password'";
  $result =mysqli_query($link,$query);

  if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION["email"]=$UserEmail;
    header("location:index.php");
  }
  else{
    echo "<script>
    alert('Email and Password is INVALID,If your not registered please register first!');
    window.location.href='login.html';
    </script>";
  }
?>
