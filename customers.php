<?php include('functions.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kunder</title>
  </head>
  <body>
    <?php include('navigation.php'); ?>
    <p><a href="customers.php?cus_type=3">Små virksomheder</a> </p>
    <a href="create-customers.php">Opret ny kunde</a>
    <br>
    <?php $data = performQuery("SELECT id, comp_name FROM customers");
    while($row = mysqli_fetch_array($data)) { ?>
      <a href="customer-single.php?cid=<?php echo $row['id']; ?>">
          <?php echo $row['comp_name']; ?>
        </a>
        <br>
      <?php } ?>


  </body>
</html>
