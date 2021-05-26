<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forside</title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <?php include('navigation.php'); ?>
    <?php $db_data = performQuery("SELECT dato, message, employees.f_name, employees.l_name from messages INNER JOIN employees on messages.sent_by = employees.id ORDER BY dato desc");
    while($row = mysqli_fetch_assoc($db_data)) { ?>
      <div class="flex-container">
        <div class="flex-child">
            <p>Slået op af: <?php echo $row['f_name'] ." ". $row['l_name']; ?></p>
            <p>Tidspunkt: <?php echo $row['dato']; ?></p>
        </div>
        <div class="flex-child">
          <p><?php echo $row['message']; ?> </p>
        </div>
    </div>





    <?php } ?>




  </body>
</html>
