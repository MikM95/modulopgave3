<?php  include('functions.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medarbejdere</title>
  </head>
  <body>
    <?php include('navigation.php') ?>
    <a href="create-employee.php">Opret ny medarbejder</a>
    <?php $data = performQuery("SELECT id, f_name, l_name FROM employees");
    while($row = mysqli_fetch_array($data)) {
      ?>
      <a href="employees-single.php?eid=<?php echo $row['id']; ?>">
        <?php
        echo $row['f_name'];
        echo " ";
        echo $row['l_name'] . "<br>";
        ?>
      </a>
    <?php } ?>







  </body>
</html>
