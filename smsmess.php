<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

  $message = $_POST['message'];

  $url = 'https://rest.nexmo.com/sms/json?' . http_build_query(
   [  'api_key' =>  'a5213d56',
      'api_secret' => '47ca301dc27b53a8',
      'to' => '447871778000',
      'from' => 'societyPlus',
      'text' => $message,
      'type' => 'text',
    ]);

  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);

  echo $response;}
?>


<html>
  <head>
    <title>Phone Contact</title>
    <link rel="stylesheet" type="text/css" href="./style/main.css"/>
  </head>

  <body>
    <nav>
      <h1>society<sup>+</sup> - Birmingham City University</h1>
      <?php
        include 'navigationadmin.php';
      ?>
    </nav>

    <section id="header">
        <div id="header-content">
          <h1>Phone Contact</h1>
      </div>
    </section>

    <section id="content" style="float:right; width:70%; height:35%">
    </br>
      <form method="post">
        <p style="font-family: sans-serif;color:white;">Please Enter Your Message:</p>
        <input type="textarea" name="message"></br></br>
        <input type="submit" value="Submit">
      </form>
    </section>

    <?php
      include 'footer.php';
    ?>

   </body>
</html>
