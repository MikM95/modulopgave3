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
    $data = performQuery("SELECT id, f_name, l_name, mail, phone_emp FROM employees WHERE id='$eid'");
    $info = mysqli_fetch_array($data);

    ?>

<div class="site-width">
     <div class="left">
       <p>Role</p>
       <p><?php echo $info['f_name']; $info['l_name']; ?></p>
       <p><?php echo $info['mail']; ?></p>
       <p><?php echo $info['phone_emp']; ?></p>
     </div>
     <div class="right">
       <p>Ansvarlig for flg. kunder:</p>

     </div>
</div>


  </body>
</html>
