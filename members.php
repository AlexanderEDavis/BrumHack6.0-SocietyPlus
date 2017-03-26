<html>
  <head>
    <title>Template</title>
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

    <section id="content">
      <table>
        <tr>
          <th>
            <p>First name</p>
          </th>
          <th>
            <p>Last name</p>
          </th>
          <th>
            <p>Student ID</p>
          </th>
          <th>
            <p>Text opt out?</p>
          </th>
          <th>
            <p>Email opt out</p>
          </th>
        </tr>
        <tr>
          <td>
          </td>
          <td>
          </td>
          <td>
          </td>
          <td>
          </td>
          <td>
          </td>
        </tr>
      </table>
    </section>

    <?php
      include 'footer.php'
    ?>

   </body>
</html>
