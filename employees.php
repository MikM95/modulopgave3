<?php  include('functions.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medarbejdere</title>
  </head>
  <body>
    <?php include('navigation.php') ?>
    <?php $data = performQuery("SELECT firstname, lastname FROM users");
    while($row = mysqli_fetch_array($data)) {
      ?>
      <a href="">  <?php
            echo $row['firstname'];
            echo " ";
            echo $row['lastname'] . "<br>";
          }

            ?></a>





  </body>
</html>
