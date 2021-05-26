<?php  include('functions.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medarbejdere</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <?php include('navigation.php') ?>
    <a href="create-employee.php" class="none"><div class="new_x">Opret ny medarbejder</div></a>
    <div class="contet-wrapper">
      <div class="sorting">
        <ul>
          <li>Kategorier: </li>
          <a href="employees.php?rolle=1"><li>Ejer</li></a>
          <a href="employees.php?rolle=2"><li>Revisor</li></a>
          <a href="employees.php?rolle=3"><li>Assistent</li></a>
          <a href="employees.php?rolle=4"><li>IT</li></a>
          <a href="employees.php?rolle=5"><li>Leder</li></a>
          <a href="employees.php?rolle=6"><li>Direktør</li></a>
        </ul>
      </div>
      <main>
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
      </main>
    </div>
  </body>
</html>
