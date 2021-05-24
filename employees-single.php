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
    $data = performQuery("SELECT f_name, l_name, mail, phone_emp, employee_role.role FROM employees INNER JOIN employee_role ON employees.role_id = employee_role.role_id WHERE id='$eid'");
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

      </div>
    </div>


  </body>
</html>
