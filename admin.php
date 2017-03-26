<html>
  <head>
    <title>Template</title>
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
          <h1>Society Administration</h1>
      </div>
    </section>

    <section id="content" style="float:right; width:70%; height:35%">
    </br>
      <div class="adminmenu">
      <a href="about:blank">Edit Society Details</a>
      <a href="about:blank">Members</a>
      <a href="about:blank">Notifications</a>
    </div>
    </section>

    <?php
      include 'footer.php'
    ?>

   </body>
</html>
