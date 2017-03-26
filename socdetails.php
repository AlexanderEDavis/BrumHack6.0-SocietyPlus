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
        <div id="header-content">
          <h1>Group management</h1>
      </div>
    </section>

    <section id="content">
      <form>
        Society name: <input type="text" name="societyName" readonly><br>
        Society created: <input type="datetime" name="societyCreation" readonly><br>
        Society description: <input type="textarea" name="societyDesc" readonly><br>
        President's student ID: <input type="text" name="pStudentID"><br>
        VP's student ID: <input type="text" name="vpStudentID"><br>
        Position 3: <input type="text" name="pos3Name"><br>
        Position 3 student ID: <input type="text" name="pos3ID"><br>
        Position 4: <input type="text" name="pos4Name"><br>
        Position 4 student ID: <input type="text" name="pos4ID"><br>
        Position 5: <input type="text" name="pos5Name"><br>
        Position 5 student ID: <input type="text" name="pos5ID"><br>
        Position 6: <input type="text" name="pos6Name"><br>
        Position 6 student ID: <input type="text" name="pos6ID"><br>
        Position 7: <input type="text" name="pos7Name"><br>
        Position 7 student ID: <input type="text" name="pos7ID"><br>
      </form>
    </section>

    <?php
      include 'footer.php'
    ?>

   </body>
</html>
