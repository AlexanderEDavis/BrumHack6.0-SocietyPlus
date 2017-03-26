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
      <h1>society+ - Birmingham City University</h1>
      <?php
        include 'navigationvisit.php'
      ?>
    </nav>

    <section id="header">
        <div id="header-content" style="width:100%; height: 60%; overflow:auto;">
            <div class="LeftImage" style="float:left; width:30%; height:100%;">

              <img src="./images/BCUMHA_Logo.png" alt="Logo" style="min-height: 100%; max-height: 100%; margin-left:70%;"/>

            </div>
            <div class="RightImage" style="float:right; width:70%; height:100%;">
              <img src="./images/Logo.png" alt="Logo" style="height:50px;">
              <h1>Society Name</h1>
              <h4>Society description</h4>
            </div>

      </div>
    </section>

    <section id="content">
      <div class="wrap" style="width:100%; overflow:auto;">

        <div class="LeftContent" style="float:left; width:30%; height:30%; padding-left:5%;border-style:solid; border-width:5px;">
          <p>asdas</p>
        </div>
        <div class="RightContent" style="float:right; width:70%; height:30%">


      </div>
    </section>

    <div id="content" align="center" style="background: white">
      <p>Content goes here</p>
    </div>

<?php
  include 'footer.php'
?>

</body>
</html>
