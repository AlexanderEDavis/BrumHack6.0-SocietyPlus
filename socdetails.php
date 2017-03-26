<?php
include('session.php');
//include('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $Desc = $_POST['societyDesc'];
  $Pres = $_POST['pStudentID'];
  $VP = $_POST['vpStudentID'];
  $P3N = $_POST['pos3Name'];
  $P3ID = $_POST['pos3ID'];
  $P4N = $_POST['pos4Name'];
  $P4ID = $_POST['pos4ID'];
  $P5N = $_POST['pos5Name'];
  $P5ID = $_POST['pos5ID'];
  $P6N = $_POST['pos6Name'];
  $P6ID = $_POST['pos6ID'];
  $P7N = $_POST['pos7Name'];
  $P7ID = $_POST['pos7ID'];

  if ($Desc="") {
  }else{
    $sql = "UPDATE Society SET SocDesc = '$Desc' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($Pres="") {
  }else{
    $sql = "UPDATE Society SET President = '$Pres' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($VP="") {
  }else{
    $sql = "UPDATE Society SET Vice-President = '$VP' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($P3N="") {
  }else{
    $sql = "UPDATE Society SET Position3 = '$P3N' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($P3ID="") {
  }else{
    $sql = "UPDATE Society SET Position3Member = '$P3ID' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($P4N="") {
  }else{
    $sql = "UPDATE Society SET Position4 = '$P4N' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($P4ID="") {
  }else{
    $sql = "UPDATE Society SET Position4Member = '$P4ID' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($P5N="") {
  }else{
    $sql = "UPDATE Society SET Position5 = '$P5N' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($P5ID="") {
  }else{
    $sql = "UPDATE Society SET Position5Member = '$P5ID' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($P6N="") {
  }else{
    $sql = "UPDATE Society SET Position6 = '$P6N' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($P6ID="") {
  }else{
    $sql = "UPDATE Society SET Position6Member = '$P6ID' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($P7N="") {
  }else{
    $sql = "UPDATE Society SET Position7 = '$P7N' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

  if ($P7ID="") {
  }else{
    $sql = "UPDATE Society SET Position7Member = '$P7ID' WHERE  SocID =2";
    $result = mysqli_query($db,$sql);
  };

}
?>
<html>
  <head>
    <title>society+ Edit Group Details - Birmingham City University</title>
    <link rel="stylesheet" type="text/css" href="./style/main.css"/>
  </head>

  <body>
    <nav>
      <h1>society+ - Birmingham City University</h1>
      <?php
        include 'navigationadmin.php';
      ?>
    </nav>

    <section id="header">
        <div id="header-content">
          <h1>Group Management</h1>
      </div>
    </section>

    <section id="content" style="width:85%; height:35%;margin-left:5%;">
    </br>
    <h2 style="color:white;">Current Information</h2>
    <table style="font-family: sans-serif;color:white;">
      <tr>
        <th>
          <p>Society Description</p>
        </th>
        <th>
          <p>President's Student ID</p>
        </th>
        <th>
          <p>Vice President's Student ID</p>
        </th>
        <th>
          <p>Position 3 Title</p>
        </th>
        <th>
          <p>Position 3's Student ID</p>
        </th>
        <th>
          <p>Position 4 Title</p>
        </th>
        <th>
          <p>Position 4's Student ID</p>
        </th>
        <th>
          <p>Position 5 Title</p>
        </th>
        <th>
          <p>Position 5's Student ID</p>
        </th>
        <th>
          <p>Position 6 Title</p>
        </th>
        <th>
          <p>Position 6's Student ID</p>
        </th>
        <th>
          <p>Position 7 Title</p>
        </th>
        <th>
          <p>Position 7's Student ID</p>
        </th>
      </tr>
      <?php
      $sql = "SELECT * FROM Society WHERE SocID = 2";
      $result = $db->query($sql);

      if ($result->num_rows > 0) {
       // output data of each row
       while( $row = mysqli_fetch_array($result)) { echo "
         <tr>";
         echo "<td>". $row['SocDesc'] . "</td>";
         echo "<td>" . $row['President'] ."</td>";
         echo "<td>" . $row['Vice-President'] . "</td>";
         echo "<td>" . $row['Position3'] ."</td>";
         echo "<td>" . $row['Position3Member'] ."</td>";
         echo "<td>" . $row['Position4'] ."</td>";
         echo "<td>" . $row['Position4Member'] ."</td>";
         echo "<td>" . $row['Position5'] ."</td>";
         echo "<td>" . $row['Position5Member'] ."</td>";
         echo "<td>" . $row['Position6'] ."</td>";
         echo "<td>" . $row['Position6Member'] ."</td>";
         echo "<td>" . $row['Position7'] ."</td>";
         echo "<td>" . $row['Position7Member'] ."</td>";
         echo "</tr>"; }
      } else {
       echo "0 results";
      }
        ?>
    </table>
  </section>

    <section id="content" style="float:right; width:70%; height:100%">
    </br>
    <h2 style="color:white;">New Information</h2>
      <form method="POST">
        <p style="font-family: sans-serif;color:white;">Society Description: <input type="textarea" name="societyDesc"></p>
        <p style="font-family: sans-serif;color:white;">President's Student ID: <input type="text" name="pStudentID"></p>
        <p style="font-family: sans-serif;color:white;">VP's Student ID: <input type="text" name="vpStudentID"></p>
        <p style="font-family: sans-serif;color:white;">Position 3 Title: <input type="text" name="pos3Name"></p>
        <p style="font-family: sans-serif;color:white;">Position 3 Student ID: <input type="text" name="pos3ID"></p>
        <p style="font-family: sans-serif;color:white;">Position 4 Title: <input type="text" name="pos4Name"></p>
        <p style="font-family: sans-serif;color:white;">Position 4 Student ID: <input type="text" name="pos4ID"></p>
        <p style="font-family: sans-serif;color:white;">Position 5 Title: <input type="text" name="pos5Name"></p>
        <p style="font-family: sans-serif;color:white;">Position 5 Student ID: <input type="text" name="pos5ID"></p>
        <p style="font-family: sans-serif;color:white;">Position 6 Title: <input type="text" name="pos6Name"></p>
        <p style="font-family: sans-serif;color:white;">Position 6 Student ID: <input type="text" name="pos6ID"></p>
        <p style="font-family: sans-serif;color:white;">Position 7 Title: <input type="text" name="pos7Name"></p>
        <p style="font-family: sans-serif;color:white;">Position 7 Student ID: <input type="text" name="pos7ID"></p>
        <input type="submit" value="Submit">
      </form>
    </section>

    <?php
      include 'footer.php';
    ?>

   </body>
</html>
