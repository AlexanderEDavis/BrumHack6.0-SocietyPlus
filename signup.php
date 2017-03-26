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
          <h1>Sign up to society</h1>
      </div>
    </section>

    <section id="content">
      <form>
        First name: <input type="text" name="firstName"><br>
        Last name: <input type="text" name="lastName"><br>
        Student ID: <input type ="text" name="studentID"><br>
        eMail address: <input type="text" name="emailAddress"><br>
        Phone number: <input type="text" name="phoneNumber"><br>
        <br>
        Do you wish to be contacted by <br>
        Phone? <input type="checkbox" name="contactPhone"> eMail? <input type="checkbox" name="contacteMail"><br>
        <input type="submit" value="Submit">
      </form>
    </section>

    <?php
      include 'footer.php'
    ?>

   </body>
</html>
