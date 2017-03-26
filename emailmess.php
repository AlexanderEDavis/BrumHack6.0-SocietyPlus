<?php
   include('session.php');
   //include('config.php');
   $sql = "SELECT * FROM Member WHERE `EmailOptOut` = 0";
   $result = $db->query($sql);

   if($_SERVER["REQUEST_METHOD"] == "POST") {
   $mail_body = $_POST['message'];

   if ($result->num_rows > 0) {
    // output data of each row
    while( $row = mysqli_fetch_array($result)) {
   $mail_subject=$_POST['mail_subject'];
   $email_list=$row['Email'];
   foreach $to {
   $sent=mail($to,$mail_subject,$mail_body, "From: MikeRotch@anythingbutie.tech");
   }
   if ($sent) {
   echo "<b> Email has been successfully sent </b><br><br>";
   echo "<b> Message : </b><br>$mail_body";
   } else {
   echo "Email could not be sent, there may be errors in the e-mail address";
 }}}}
?>

<html>
  <head>
    <title>society+ Bulk Email - Birmingham City University</title>
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
          <h1>Email contact settings</h1>
      </div>
    </section>

    <section id="content" style="float:right; width:70%; height:65%">
    </br>
      <form>
        Subject: <input type="text" name="mail_subject"><br>
        Message:<br>
        <input type="textarea" rows="5" cols="40" style="width:200px; height:50px;" name="message"><br>
        <input type="submit" value="Submit">
      </form>
    </section>

    <?php
      include 'footer.php'
    ?>

   </body>
</html>
