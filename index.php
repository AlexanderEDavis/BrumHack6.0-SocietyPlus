<html>
  <head>
    <title>Welcome to society+ - Birmingham City University</title>
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
        <div id="header-content" style="width:100%; height: 60%; overflow:auto;">
            <div class="LeftImage" style="float:left; width:30%; height:100%;">

              <img src="./images/BCUMHA_Logo.png" alt="Logo" style="min-height: 100%; max-height: 100%; margin-left:70%;"/>

            </div>
            <div class="RightImage" style="float:right; width:70%; height:100%;">
              <h1>Society Name</h1>
              <h4>Society description</h4>
            </div>

      </div>
    </section>

    <section id="content">
      <div class="wrap" style="width:100%; overflow:auto;">

        <div class="LeftContent" style="float:left; width:20%; height:30%; padding-left:5%;border-style:solid;border-color:white; border-width:0.1%;margin-left: 5%; margin-top:4%;border-radius:5px;">
          <h1 style="color:white; font-size:250%; padding-top:10%;">Join</h1>
          <h4 style="padding-top:5% color:white;">BCU Mental Health Awareness Standard Membership £3.00</h4>
          <div class="button-blue" style="margin-right:25%;margin-top:5%;padding-top:5%;padding-bottom:5%;border-style:solid;border-width:1%;border-radius:2px;">
            <a href="members.php" style="text-decoration:inherit; margin-left:15%;color:white;font-family:Arial;">Add Membership</a>
          </div>
        </div>

        <div class="RightContent" style="float:right; width:60%; height:60%; border-style:solid;border-color:white; border-width:0.1%; margin-top:4%;margin-right:5%;border-radius:5px;">
          <div class="TextWrap" style="margin-left:5%; margin-right:5%; margin-top:3%;font-family: sans-serif;color:white;">
            <p>
              To raise awareness, tackle stigma, signpost for additional information and enhance the student experience for those who suffer from a mental health illness within Birmingham City University.
            </p>

            <p>
              We are a mixed age group of current Birmingham City University students, Alumni, and Student Union officers. We have all been affected by mental health illness in some way, and so we are passionate about removing the stigma associated with mental health illness and by supporting students to access support if they need to.
            </p>

            <p>
              President - Alexander Davis</br>
              Vice President - Nida Mahfooz</br>
              Secretary - Charis Eaton</br>
              Treasurer - Rachel Smyth</br>
              Events Coordinator - Luke Mullins</br>
            </p>
          </div>
        </div>

        <div class="LeftContent" style="float:left; width:20%; height:20%;width:25%;border-style:solid;border-color:white; border-width:0.1%;margin-left: 5%; margin-top:4%;border-radius:5px;">
          <div class="SocialMedia" style="color=white;margin-top:5%; margin-left:3%;">
            <h4 style="margin-top:5%;"><span style="color:white;">Web: </span><span style="color:white;cursor:pointer;">https://bcumha.wordpress.com/</span> </h4>
            <h4 style="margin-top:5%;"><span style="color:white;">Email: </span><span style="color:white;cursor:pointer;">bcumentalhealthawareness@gmail.com</span> </h4>
            <h4 style="margin-top:5%;">Phone:</h4>
          </div>
        </div>

    </section>

    <?php
      include 'footer.php'
    ?>

   </body>
</html>
