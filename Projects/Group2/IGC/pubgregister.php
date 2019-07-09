<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Shojumaru&display=swap');
    </style>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/pubgregister.css">
  </head>
  <body>
    <?php
    if(isset($_SESSION['username'])){


      $IPATH=$_SERVER["DOCUMENT_ROOT"]."/IGC/";include($IPATH."header.html");
    }else{
       $IPATH=$_SERVER["DOCUMENT_ROOT"]."/IGC/";include($IPATH."homeheader.html");
     } ?>
    <header>
      <h1>Registeration Form</h1>
    </header>
    <div class="register">
      <!-- <div class="name-input">
        <h3>enter name</h3>
      </div> -->
      <form class="name" action="php/pubgregister.php" method="post">
        PLAYER-1 USERID:-<input type="text" name="id1" value="" size="30px"><br>
        PLAYER-2 USERID:-<input type="text" name="id2" value="" size="30px"><br>
        PLAYER-3 USERID:-<input type="text" name="id3" value="" size="30px"><br>
        PLAYER-4 USERID:-<input type="text" name="id4" value="" size="30px"><br>
        TEAM NAME:-<input type="text" name="team-name" value="" size="30px"><br>
        <div class="drop">

        DATE:- <select name="date"><option value="23/10/2019" >23/10/2019</option>
        </select><br>
      </div>


      Contact Number:-<input type="text" name="contact-number" value=""><br>
      Email id:-<input type="text" name="Email-id" value="">
      <div class="checkbox">

      ACCEPT RULES:-<input type="checkbox" name="rules" value="yes" size="50px"><br>
      ACCEPT T&C:-<input type="checkbox" name="tc" value="yes" size="50px"><br>
</div>
      <div class="submit">
      <a href="pubgregister.html"> <input type="submit" name="submit" value="Do payment"></a>
        </div>
      </form>
    </div>
  </body>
</html>
