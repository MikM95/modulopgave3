<?php
include('functions.php');
$eid = $_GET['eid'];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <?php
    include('navigation.php');
    $data = performQuery("SELECT f_name, l_name, employees.mail, phone_emp, employee_role.role FROM employees INNER JOIN employee_role ON employees.role_id = employee_role.role_id WHERE employees.id=$eid");
    $info = mysqli_fetch_assoc($data);
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

        <?php $db_kunde_data = performQuery("SELECT id, comp_name FROM customers WHERE assigned_employee =$eid"); ?>
        <ul>
          <?php  while ($row = mysqli_fetch_assoc($db_kunde_data)) { ?>
            <li><a href="customer-single.php?cid=<?php echo $row['id'];?>"> <?php echo $row['comp_name']; ?> </a></li>
          <?php } ?>
        </ul>
      </div>
    </div>

  </body>
</html>
