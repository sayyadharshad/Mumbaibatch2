<?php
session_start();
if (!isset($_SESSION['user']))
 {
    header('location:loginpage.php');
 }

 ?>
 <!DOCTYPE html>
<html>
<head>
  <title>rahul</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  @import url('https://fonts.googleapis.com/css?family=Shojumaru&display=swap');
  </style>
  <style>

  /* .footer {
     padding: 20px;
     background-color: black;
     color: white;
     text-align: center;
     margin-top: 50px;
  }

  nav a{
          color: #fff;
          text-decoration: none;
          padding: 7px 25px;
          display: inline-block;
      }

      nav :hover{
        color: blue;
        transform: scale(1.11);

      }
      .fcontainer p{
          line-height: 200px; /* Create scrollbar to test positioning */
      /* }
      #logof{

        border-radius: 25%;
      }

      .fa {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        display: inline-block;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 25%;
      }
      .fa:hover {
          opacity: 0.7;
          transform: scale(1.11);
      }

      .fa-google {
    background: #dd4b39;
    color: white;
  }

  .fa-facebook {
  background: blue;
  color: white;
  }

      .fa-youtube {
    background: #bb0000;
    color: white;
  }


      .fa-twitter {
        background: #55ACEE;
        color: white;
      }
      .img2{
        border-radius:10px;

      } */
        </style>
</head>
<body >
  <div class="header">
    <a href="index.html" class="logo">IGC</a>

  </a>
  <!-- <div class="img2">
    <img src="IGCLOGO.png">
  </div> -->
  <div class="header-right">
    <a href="index.html">Home</a>
    <a href="Tournament.html">Tournaments</a>
    <a class="active" href="login.html">Login</a>
    <a href="signup.html">SignUp</a>
  </div>
</div>
<div>
<form class="modal-content" align="middle" action="php/login.php" method="post">
  <!-- <div class="img2">
    <img src="IGCLOGO.png">
  </div> -->
<h2 align="middle">login</h2>
<div class="inputWithIcon">
<input type="email" name="username" placeholder="    Email" required>
<i class="material-icons" style="font-size:24px;">email</i>
<div>
</input>
<br>
<div class="inputWithIcon">
<input type="password" name="password" placeholder="Password" required>
<i class="material-icons">lock</i>
</input>
</div>
<label class="check">
<input type="checkbox" checked="checked" name="remember"> Remember me
</label>
<span class="psw"><a href="forgetpassword.html"><span >forget password?</a></span>

<button type="submit" name="submit" value="login">submit</button>

<p align="middle">Not a Member? <a href="signup.html">SignUp now!</a>
</form>
</div>
</div>
</div>
<!-- <div class="footer">

  <div class="fcontainer">

  <div class="img">
    <img src="log.svg" id="logof" width="170px" height="170px" align=left>
  </div>
            <nav>
                <a href="help.html" style="font-size:25px">Help</a>
                <a href="aboutus.html" style="font-size:25px">About Us</a>
                <a href="Tandc.html" style="font-size:25px">Term & Condition</a>
                <a href="pp.html" style="font-size:25px">Privacy Policy</a>
                <a href="contus.html" style="font-size:25px">Contact Us</a>
           </nav>
    </div>
<div>
      <a class="fa fa-google" href="https://google.com" style="font-size:20px"></a>
      <a class="fa fa-facebook" href="https://facebook.com" style="font-size:20px"></a>
      <a class="fa fa-youtube" href="https://youtube.com" style="font-size:20px"></a>
      <a class="fa fa-twitter" href="https://twitter.com" style="font-size:20px"></a>
    </div>
    <div>
      <p>© 2019 GamingWorld. All rights reserved. GamingWorld.com</p></div>

</div> -->
</body>
</html>
