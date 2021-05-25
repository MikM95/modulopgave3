<?php
include('functions.php');
$eid = $_GET['eid'];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <?php
    include('navigation.php');
    $data = performQuery("SELECT f_name, l_name, employees.mail, phone_emp, employee_role.role, customers.comp_name FROM employees INNER JOIN employee_role ON employees.role_id = employee_role.role_id INNER JOIN customers ON employees.id = customers.assigned_employee WHERE employees.id=$eid");
    $info = mysqli_fetch_array($data);
    ?>

    <div class="site-width">
      <div class="left">
        <p><?php echo $info['role']; ?> </p>
        <p><?php echo $info['f_name'] ." ". $info['l_name']; ?></p>
        <p> <a href="mailto:<?php echo $info['mail']; ?>"><?php echo $info['mail']; ?></a></p>
        <p><?php echo $info['phone_emp']; ?></p>
      </div>
      <div class="right">
        <p class="center-text">Ansvarlig for flg. kunder:</p>
        <hr id="line">
        <?php //Jeg kan kun få koden til smide et firma navn til skærmen, har forsøgt at tilføje et loop for at få den til at smide flere ud men det virker ikke, tror jeg skal snakke med kenneth ?>
        <p><?php echo $info['comp_name']; ?> </p>
      </div>
    </div>

  </body>
</html>
