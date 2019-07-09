<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
@import url('https://fonts.googleapis.com/css?family=Shojumaru&display=swap');
</style>

<link rel="stylesheet" href="css/pubgdetails.css">
  </head>
  <body>
    <?php  $IPATH=$_SERVER["DOCUMENT_ROOT"]."/IGC/";include($IPATH."header.html"); ?>

    <div class="pubg-details">
      <div class="banner">

      </div>
      <div class="details">
        <h>Tournament details:</h>
        <p>Time : 12:30pm <br>
            Date : 12/2/2222</p>
            <div class="Register">
              <a href="pubgregister.php">REGISTER</a>
            </div>
      </div>

    </div>






  </body>
</html>
