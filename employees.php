<?php  include('functions.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medarbejdere</title>
  </head>
  <body>
    <?php include('navigation.php') ?>
    <p><a href="employees.php?rolle=1">Ejer</a></p>
    <p><a href="employees.php?rolle=2">Revisor</a></p>
    <p><a href="employees.php?rolle=3">Assistent</a></p>
    <p><a href="employees.php?rolle=4">IT</a></p>
    <p><a href="employees.php?rolle=5">Leder</a></p>
    <p><a href="employees.php?rolle=6">Direktør</a></p>
    <br>
    <a href="create-employee.php">Opret ny medarbejder</a>
    <?php
    if(isset($_GET['rolle'])) {
      $kategori = $_GET['rolle'];
      $data = performQuery("SELECT id, f_name, l_name FROM employees where role_id=$kategori");
    }else {
      $data = performQuery("SELECT id, f_name, l_name FROM employees");
    }
    while($row = mysqli_fetch_array($data)) { ?>
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
