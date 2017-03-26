<?php
   include('session.php');
   //include('config.php');
?>

<html>
  <head>
    <title>society+ Members List - Birmingham City University</title>
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
          <h1>Society Members</h1>
      </div>
    </section>

    <section id="content" style="float:right; width:70%; height:60%">
    </br>
      <table style="font-family: sans-serif;color:white;">
        <tr>
          <th>
            <p>Student ID</p>
          </th>
          <th>
            <p>First Name</p>
          </th>
          <th>
            <p>Last Name</p>
          </th>
        </tr>
        <?php
        $sql = "SELECT * FROM Member WHERE `SocID` = 2";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
         // output data of each row
         while( $row = mysqli_fetch_array($result)) { echo "
           <tr>";
           echo "<td>". $row['StudentID'] . "</td>";
           echo "<td>" . $row['FName'] ."</td>";
           echo "<td>" . $row['LName'] . "</td>";
           echo "</tr>"; }
        } else {
         echo "0 results";
        }
          ?>
      </table>
    </section>

    <?php
      include 'footer.php'
    ?>

   </body>
</html>
