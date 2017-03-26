<?php

   if($_SERVER["REQUEST_METHOD"] == "POST") {
$STID = $_POST['studentID'];
$Fname = $_POST['firstName'];
$Lname = $_POST['lastName'];
$email = $_POST['emailAddress'];
$Phone = $_POST['phoneNumber'];
$POO = $_POST['contactPhone'];
$EOO = $_POST['contacteMail'];

  $sql = "INSERT Member SET (`SocID`, `StudentID`, `FName`, `LName`, `Email`, `Phone`, `PhoneOptOut`, `EmailOptOut`) VALUES (2,'$STID','$Fname','$Lname','$email','$Phone','$POO','$EOO')";
  $result = mysqli_query($db,$sql);
}
?>

<html>
  <head>
    <title>society+ Sign Up - Birmingham City University</title>
    <link rel="stylesheet" type="text/css" href="./style/main.css"/>
  </head>

  <body>
    <nav>
      <h1>society<sup>+</sup> - Birmingham City University</h1>
      <?php
        include 'navigationvisit.php'
      ?>
    </nav>

    <section id="header">
        <div id="header-content">
          <h1>Sign up to Society</h1>
      </div>
    </section>

    <section id="content" style="float:right; width:70%; height:55%">
    </br>
      <form method="post">
        First Name: <input type="text" name="firstName"></br></br>
        Last Name: <input type="text" name="lastName"></br></br>
        Student ID: <input type ="text" name="studentID"></br></br>
        Email Address: <input type="text" name="emailAddress"></br></br>
        Phone Number: <input type="text" name="phoneNumber"></br></br>
        </br>
        Please Do Not Contact Me By: </br>
        Phone <input type="checkbox" name="contactPhone"> Email <input type="checkbox" name="contacteMail"></br>
        </br>
        <input type="submit" value="Submit">
      </form>
    </section>

    <?php
      include 'footer.php'
    ?>

   </body>
</html>
