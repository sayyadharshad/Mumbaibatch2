<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  header {
    background-color: #666;
    height:86px;

  }
  section{
    text-align: center;
    width: 1290px;
    height: auto;
  }
  .main{
    float:right;
  }
  .dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }
  .dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
  }
  .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}


.container{padding:30px; align:center}


  </style>
  </head>
  <body>
    <header>
      <div class="main">
      <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn"><img src="user.jpg" style="height:50px;width:50px;"></img></button>
        <div id="myDropdown" class="dropdown-content">
          <a href="#home">My profile</a>
          <a href="#about">My books</a>
          <a href="#contact">Sign out</a>
        </div>
      </div>
    </div>
      <script>
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
      </script>

    </header>
    <section >

      <div class="container">
        <embed src="Monkey_brains.pdf" type="application/pdf" width="100%" height="500px"/>
      </div>

    </section>
  </body>
</html>
