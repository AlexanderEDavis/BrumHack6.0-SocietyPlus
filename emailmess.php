<html>
  <head>
    <title>Template</title>
    <link rel="stylesheet" type="text/css" href="./style/main.css"/>
  </head>

  <body>
    <nav>
      <h1>society+ - Birmingham City University</h1>
      <?php
        include 'navigationadmin.php'
      ?>
    </nav>

    <section id="header">
        <div id="header-content">
          <h1>Email contact settings</h1>
      </div>
    </section>

    <section id="content">
      <form>
        To: <input type="text" name="recipient"><br>
        Subject: <input type="text" name="mailSubject"><br>
        Message:<br>
        <input type="textarea" name="message"><br>
        <input type="submit" value="Submit">
      </form>
    </section>

    <?php
      include 'footer.php'
    ?>

   </body>
</html>
