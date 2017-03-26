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
          <img src="./images/BCUMHA_Logo.png" alt="Logo"/>
          <h1>Lorem ipsum</h1>
          <h4>Lorem ipsum dolor sit amet</h4>
      </div>
    </section>

    <section id="content">
      <div class="wrap" style="width:100%; overflow:auto;">
        <div class="LeftContent" style="float:left; width:30%; background:blue; height:30%">
          <p>asdas</p>
        </div>
        <div class="RightContent" style="float:right; width:70%; background:red; height:30%">
          <p>test</p>
      </div>
    </section>

    <div id="content" align="center">
      <p>Content goes here</p>
    </div>

    <?php
      include 'footer.php'
    ?>

   </body>
</html>
