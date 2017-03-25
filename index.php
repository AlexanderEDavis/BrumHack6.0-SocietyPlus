<?php
   include("config.php");
   session_start();

   date_default_timezone_set('Europe/London');

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;

         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html>
  <head>
    <title>Template</title>
    <link rel="stylesheet" type="text/css" href="./style/main.css"/>
  </head>

  <body>
    <nav>
      <h1>SocietyPlus</h1>
      <ul style="float:right;">
        <li>Marketing</li>
        <li>Jobs</li>
        <li>Map</li>
        <li>Contact Us</li>
      </ul>
    </nav>

    <section id="header">
        <div id="header-content">
          <img src="./images/BCUMHA_Logo.png" alt="Logo"/>
          <h1>Lorem ipsum</h1>
          <h4>Lorem ipsum dolor sit amet</h4>
      </div>
    </section>

    <section id="content">
      <div class="wrap" style="width:100%; overflow:auto;">
        <div class="LeftContent" style="float:left; width:30%; background:blue; height:30%">
          <p>asdas</p>
        </div>
        <div class="RightContent" style="float:right; width:70%; background:red; height:30%">
          <form id = "login" action = "" method = "post">
             <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
             <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
             <input type = "submit" value = " Submit "/><br />
          </form>
      </div>
    </section>

    <div id="content" align="center">
      <p>Content goes here</p>
    </div>

    <footer>
      <p>asdasd</p>
    </footer>

   </body>
</html>
