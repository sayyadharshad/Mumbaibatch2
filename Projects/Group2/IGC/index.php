<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main-page-tournament.css">
  <style>
  @import url('https://fonts.googleapis.com/css?family=Shojumaru&display=swap');
  </style>
  <style>
  body {
    margin: 0;
    background: #0c0032;
    font-family: 'Shojumaru', cursive;

  }
  .banner{
    width: 1000px;
    margin-left: 150px;
    margin-top: 10px;
    box-shadow: 10px 10px 10px black ,-10px -10px 10px black inset ,10px -10px 10px black inset,-10px 10px 10px black;

  }


    .header {
      overflow: hidden;
       background-color: #282828;
      /* background-image: radial-gradient(blue,#0c0032,black); */
      padding: 20px 10px;
    }
  body{
    font-family: 'Shojumaru', cursive;

  }

    .header a {
      float: left;
      color: white;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 25px;
      line-height: 25px;
      border-radius: 4px;

    }

    .header a.logo {
      font-size: 50px;
      font-weight: bold;
      text-shadow: 10px 5px 10px black , -10px -5px 10px black,2px 2px 10px white , -2px -2px 10px white,-10px 10px 10px black , 10px -10px 10px black,-2px 2px 10px white , 2px -2px 10px white ;
      transition: 0.3s ease-in-out,transform:0.3s ease in out;


    }

    .header a:hover {
      /* background-color: black; */
      color: white;
    }

    .header a.active {
      background-color: black;
      color: white;
    }

    .header-right {
      float: right;
    }

    @media screen and (max-width: 500px) {
      .header a {
        float: none;
        display: block;
        text-align: left;
      }

      .header-right {
        float: none;
      }
    }
  .img2{
    background-color: darkblue;
    margin-top: 0.1%;
    text-align: center;
    padding: 1%;
  }
  .ltour{
    text-align: center;
    font-size: 40px;
    /* margin-top: 2000px; */
    font-family: 'Shojumaru', cursive;
    font-weight: bold;
    background-color: ;
    margin-top:35px;
    color: white;
    transition: 0.3s ease-in-out,transform:0.3s ease in out;


  }
  .ltour:hover{
    transform: scale(1.05);
    color: #282828;


  }
  .ltour a{
    text-decoration: none;
    color: white;
    box-shadow: 10px 10px 10px black ,-10px -10px 10px black inset ,10px -10px 10px black inset,-10px 10px 10px black;

  }

  .main,.main2{
    display:flex;
  }
  .frame1,.frame2,.frame3,.frame4{
    padding-left: 6%;
    padding-top: 1%;
  }
  .footer {
     padding: 20px;
     background-color: black;
     color: white;
     text-align: center;
     margin-top: 15px;
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
      }
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

  </style>
</head>
<body>
  <?php
  if(isset($_SESSION['username'])){


    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/IGC/";include($IPATH."header.html");
  }else{
     $IPATH=$_SERVER["DOCUMENT_ROOT"]."/IGC/";include($IPATH."homeheader.html");
   } ?>
     <div class="banner">
  <section>
    <a href="demo.html"><img class="mySlides" src="css/photoes/pubgbanner.jpg" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="css/photoes/apexlegendbanner.png" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="css/photoes/csbanner.jpg" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="css/photoes/asphalt8banner.jpg" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="css/photoes/fortnitebanner.jpg" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="css/photoes/frozabanner.jpg" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="css/photoes/callofdutybanner.jpg" style="width:100%; height:400px;"></a>
  </section>

</div>

<div class="ltour">
  <a href="Tournament.html">Our Tournaments</a>
</div>
<marquee  style="background-color:#0c0032" behavior="alternate">
<div class="image-section">
  <ul class="image-grid">
    <li>
      <a href="pubgdetails.html">

      <div class="image image-1" >
      </div>
    </a>

    </li>
    <li>
      <a href="pubgdetails.html">

      <div class="image image-2" >
      </div>
    </a>

    </li><li>
      <a href="pubgdetails.html">

      <div class="image image-3" >
      </div>
    </a>

    </li><li>
      <a href="pubgdetails.html">

      <div class="image image-4" >
      </div>
    </a>

    </li><li>
      <a href="pubgdetails.html">

      <div class="image image-5" >
      </div>
    </a>

    </li><li>
      <a href="pubgdetails.html">

      <div class="image image-6" >
      </div>
    </a>

    </li><li>
      <a href="pubgdetails.html">

      <div class="image image-7" >
      </div>
    </a>

    </li><li>
      <a href="pubgdetails.html">

      <div class="image image-8" >
      </div>
    </a>

    </li><li>
      <a href="pubgdetails.html">

      <div class="image image-9" >
      </div>
    </a>

    </li><li>
      <a href="pubgdetails.html">

      <div class="image image-10" >
      </div>
    </a>

    </li>
  </div>
</marquee>
<div class="main">
<div class="frame1">
  <iframe width="555" height="266" src="https://www.youtube.com/embed/ENl0XNd1AKM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="frame2">
  <iframe width="555" height="266" src="https://www.youtube.com/embed/jhdyMLnhaNk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<div class="main2">
<div class="frame3">
  <iframe width="555" height="266" src="https://www.youtube.com/embed/s6QggWZFsN8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="frame4">
  <iframe width="555" height="266" src="https://www.youtube.com/embed/N-xHcvug3WI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<div class="footer">

  <div class="fcontainer">

  <div class="img">
    <!-- <img src="log.svg" id="logof" width="170px" height="170px" align=left> -->
  </div>
            <nav>
                <a href="help.html" style="font-size:25px">Help</a>
                <a href="aboutus.html" style="font-size:25px">About Us</a>
                <a href="tearms-and-condition .html" style="font-size:25px">Term & Condition</a>
                <a href="privacy-and-policy.html" style="font-size:25px">Privacy Policy</a>
                <a href="contactus.html" style="font-size:25px">Contact Us</a>
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

</div>
</body>
</html>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
