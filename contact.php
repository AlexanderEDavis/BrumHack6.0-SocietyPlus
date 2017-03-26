<?php
   include('session.php');
   //include('config.php');
?>

<html>
  <head>
    <title>society+ Admin Panel - Birmingham City University</title>
    <link rel="stylesheet" type="text/css" href="./style/main.css"/>
  </head>

  <body>
    <nav>
      <h1>society<sup>+</sup> - Birmingham City University</h1>
      <?php
        include 'navigationadmin.php'
      ?>
    </nav>

    <section id="header">
        <div id="header-content">
          <h1>Member Notifications</h1>
      </div>
    </section>

    <section id="content" style="float:right; width:70%; height:35%">
    </br>
      <div class="adminmenu">
      <a href="emailmess.php">Email members</a>
      <a href="smsmess.php">Text members</a>
    </div>
    </section>

    <?php
      include 'footer.php'
    ?>

   </body>
</html>
